// JavaScript Document
var media_events = new Array();
media_events["loadstart"] = 0;
media_events["progress"] = 0;
media_events["suspend"] = 0;
media_events["abort"] = 0;
media_events["error"] = 0;
media_events["emptied"] = 0;
media_events["stalled"] = 0;
media_events["loadedmetadata"] = 0;
media_events["loadeddata"] = 0;
media_events["canplay"] = 0;
media_events["canplaythrough"] = 0;
media_events["playing"] = 0;
media_events["waiting"] = 0;
media_events["seeking"] = 0;
media_events["seeked"] = 0;
media_events["ended"] = 0;
media_events["durationchange"] = 0;
media_events["timeupdate"] = 0;
media_events["play"] = 0;
media_events["pause"] = 0;
media_events["ratechange"] = 0;
media_events["resize"] = 0;
media_events["volumechange"] = 0;

var media_controller_events = new Array();
media_controller_events["emptied"] = 0;
media_controller_events["loadedmetadata"] = 0;
media_controller_events["loadeddata"] = 0;
media_controller_events["canplay"] = 0;
media_controller_events["canplaythrough"] = 0;
media_controller_events["playing"] = 0;
media_controller_events["ended"] = 0;
media_controller_events["waiting"] = 0;
media_controller_events["ended"] = 0;
media_controller_events["durationchange"] = 0;
media_controller_events["timeupdate"] = 0;
media_controller_events["play"] = 0;
media_controller_events["pause"] = 0;
media_controller_events["ratechange"] = 0;
media_controller_events["volumechange"] = 0;

var media_properties = [ "error", "src", "currentSrc", "crossOrigin", "networkState", "preload", "buffered", "readyState", "seeking", "currentTime", "duration",
"paused", "defaultPlaybackRate", "playbackRate", "played", "seekable", "ended", "autoplay", "loop", "mediaGroup", "controller", "controls", "volume",
"muted", "defaultMuted", "audioTracks", "videoTracks", "textTracks", "width", "height", "videoWidth", "videoHeight", "poster"];

var media_controller_properties = [ "readyState", "buffered", "seekable", "duration", "currentTime",
"paused", "playbackState", "played", "defaultPlaybackRate", "playbackRate", "volume", "muted"];




var media_properties_elts = null;
var media_mc_properties_elts = null;

var webm = null;

function init(){
	document._video = document.getElementById("video");
	
	if (document._video.controller != undefined && document._video.controller != null) {
		document._controller = document._video.controller;
		document._hasController = true;	
	} else {
		document._controller = document._video.controller;
		document._hasController = false;	
	}
	
	webm = document.getElementById("webm");
	
	media_properties_elts = new Array(media_properties.length);//media_properties 长度
	
	init_events("events", media_events, false);
	init_properties("properties", media_properties, media_properties_elts, false);
}


















































