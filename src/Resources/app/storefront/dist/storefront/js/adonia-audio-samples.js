"use strict";(self.webpackChunk=self.webpackChunk||[]).push([["adonia-audio-samples"],{4826:(t,s,i)=>{var e=i(6285);new Plyr("#audioplayer");class a extends e.Z{constructor(...t){super(...t)}init(){this.player=document.getElementById("audioplayer"),this.playlistButtons=document.querySelectorAll(".playlistButton"),this.isPlaying=0,this.player.setAttribute("src",this.playlistButtons[this.isPlaying].getAttribute("data-url")),this.playThis=t=>{const s=t.getAttribute("data-url"),i=t.getAttribute("data-index");this.player.setAttribute("src",s),this.player.play(),this.showActive(),this.isPlaying=i},this.playNext=()=>{this.isPlaying++,this.isPlaying<this.playlistButtons.length||(this.isPlaying=0),this.playThis(this.playlistButtons[this.isPlaying])},this.showActive=()=>{this.playlistButtons.forEach((t=>{t.classList.remove("active")})),this.playlistButtons[this.isPlaying].classList.add("active")},this.player.addEventListener("ended",this.playNext),this.player.addEventListener("play",this.showActive),this.playlistButtons.forEach((t=>{t.addEventListener("click",(()=>this.playThis(t)))}))}}window.PluginManager.register("AdoniaAudioSamples",a,"[audiosample-plugin]")}},t=>{t.O(0,["vendor-node","vendor-shared"],(()=>{return s=4826,t(t.s=s);var s}));t.O()}]);