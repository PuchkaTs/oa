
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';

var app = new Vue({
  el: '#app',
  data: {
    aimags: [],
    currentAimag: '',
  },

  created: function(){

  	$.getJSON('api/aimags', function(data){
  		this.aimags = data;
  		this.currentAimag = data[0];
	  	this.addMapClasses();

  	}.bind(this));


  },
  methods: {
    bindAimag: function (AimagName) {
      for (var i = this.aimags.length - 1; i >= 0; i--) {
      	if (this.aimags[i].title == AimagName) {
      		this.currentAimag = this.aimags[i];
      	}
      }
    },

    checkForAimags: function(dataBlade){
    	for (var i = this.aimags.length - 1; i >= 0; i--) {
    		if (this.aimags[i].title == dataBlade) {
    			
    			return true;
    		} else{
    			return false;
    		}
    	}
    },
    addMapClasses: function(){
    	for (var i = this.aimags.length - 1; i >= 0; i--) {
    		var AimagName = this.aimags[i].title;
    		$("path#MN-1").addClass('active');

    	}	
    }
  },

})
