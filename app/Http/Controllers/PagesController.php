<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surgalt;
use App\Salbar;
use App\SurgaltType;
use App\User;
use App\Role;
use App\News;
use App\Oaevent;
use App\Product;
use App\Message;
use GMaps;
use Validator;

class PagesController extends Controller
{
    public function home(){

    	$surgaltTypes = SurgaltType::with(
    		array('surgalt'=>function($query){
		        $query->groupBy('title');
		    })
    	)->orderBy('position', 'asc')->get();

    	return view('home2')->with(compact('surgaltTypes'));
    }

    public function showSurgalt($id){

    	$surgalt = Surgalt::find($id);

    	return view('show_surgalt')->with(compact('surgalt'));
    }


    public function edit_salbar_by_id($id)
    {
        $salbar = Salbar::find($id);
        $config['center'] = '47.920447, 106.917053';
        $config['zoom'] = '14';
        $config['scrollwheel'] = false;
        Gmaps::initialize($config);

        $marker = array();
        if($salbar->latitude == 0){
            $marker['position'] = '47.920447, 106.917053';
        } else {
            $position = (string) $salbar->latitude . ", " . (string) $salbar->longitude;
            $marker['position'] = $position;
        }
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateInputs(event.latLng.lat(), event.latLng.lng());';
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();
        return view('salbar_edit')->with(compact('salbar', 'map'));
    }

    public function update_coords_salbar($id){
        $salbar = Salbar::find($id);
        $salbar->latitude = floatval(request('xloc'));
        $salbar->longitude = floatval(request('yloc'));
        $salbar->save();
        return back();
    }

    public function showBurtgel($id){

    	$surgalt = Surgalt::find($id);
    	$surgaltLevel = $surgalt->level;
    	$surgaltType = $surgalt->surgaltType;

        $config['center'] = '47.909876, 106.917516';
        $config['zoom'] = '13';
        $config['scrollwheel'] = false;
        $config['map_height'] = '600px';
        Gmaps::initialize($config);

    	$salbaruud = Salbar::with(['surgaltuud' => function ($query) use ($surgaltType, $surgaltLevel) {

		    $query->where('type_id', $surgaltType->id)
				  ->where('level_id', $surgaltLevel->id);

			}])->get();


        foreach($salbaruud as $project){
            $marker = array();
            $position = (string) $project->latitude . ", " . (string) $project->longitude;
            $marker['position'] = $position;
            $marker['draggable'] = false;
            $marker['animation'] = 'DROP';
            $marker['title'] = $project->title;
			$marker['icon'] = asset("assets/marker.svg");

			$surgaltuudText = $this->getSurgaltuudText($project);
		    $marker['infowindow_content'] =
		        '<div class="salbar-map">'.
		        	'<div class="salbar-left">' .
						'<img src="'.
		                '/assets/salbar.jpg'.
		                '" width="432" height="200">'.
		            '</div>' .
	                '<div class="salbar-right">' .
				        '<h5><a href="' .
				        '#' .
				         '">' .
				        $project->title .
				        '</a></h5>'.
				        '<small>' .
				        $project->address .
				        '</small>'.
				        '<small class="salbar-phone">Утас: ' .
				        $project->phone .
				        '</small>'.
			        '</div>' .

			        '<div>' .
			        $surgaltuudText .
			        '</div>' .
				'</div>';
            Gmaps::add_marker($marker);
        }

        $map = Gmaps::create_map();

	    return view('map')->with(compact('map', 'surgalt'));
    }

    public function getSurgaltuudText($project){
    	$surgaltuudText ='';

    	$surgaltStartDays = $project->surgaltuud->groupBy('start_at');

        foreach ($surgaltStartDays as $start_at => $surgaltuud) {
        	$surgaltuudText .= '<h6>' .
        	'Эхлэх өдөр: ' . $start_at .
        	'</h6>' .
        	'<ul class="d-flex justify-content-around">';
        	foreach ($surgaltuud as $key => $surgalt) {
		        	$surgaltuudText .= 
		        	'<li>' .
			        '<a class="btn btn-primary" href="' .
			        // '/application/' . $surgalt->id .
                    route('application_get_path', array('id' => $surgalt->id,  'salbar' => $project->id)) .
			        '">' .
			        $surgalt->time .
			        '</a>' .
			        '</li>';
        	}
        	$surgaltuudText .='</ul>';

        }
        return $surgaltuudText;
    }

    public function showApplication($id, Request $request){

        $surgalt = Surgalt::find($id);
        
        $salbarId = $request->query('salbar');

        $salbar = Salbar::with('images')->find($salbarId);

        return view('application-form')->with(compact('salbar', 'surgalt'));

    }

    public function storeApplication(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'lastName' => 'required',
            'registerId' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $salbarId = $request->query('salbar');
        $surgaltId = $request->query('surgalt');

        $salbar = Salbar::find($salbarId);
        $surgalt = Surgalt::find($surgaltId);
        $roleMember = Role::where('name', 'member')->first();
        $user = new User($request->all());
        $roleMember->users()->save($user);

        $user->surgaltuud()->attach($surgalt);

        return view('payment-form')->with(compact('user', 'surgalt', 'salbar'));

    }

    public function show_news($id){

        $anews = News::find($id);

        return view('show_news')->with(compact('anews'));
    }

    public function show_event($id){

        $event = Oaevent::find($id);

        return view('show_event')->with(compact('event'));
    }

    public function show_product($id){

        $product = Product::find($id);

        return view('show_product')->with(compact('product'));
    }

    public function store_message(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'text' => 'required'
        ]);

        Message::create($request->all());

        return back();


    }
}
