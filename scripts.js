!function(v){v.Bideo=function(){this.opt=null,this.videoEl=null,this.approxLoadingRate=null,this._resize=null,this._progress=null,this.startTime=null,this.onLoadCalled=!1,this.init=function(e){this.opt=e=e||{};var r=this;r._resize=r.resize.bind(this),r.videoEl=e.videoEl,r.videoEl.addEventListener("loadedmetadata",r._resize,!1),r.videoEl.addEventListener("canplay",function(){r.opt.isMobile||(r.opt.onLoad&&r.opt.onLoad(),!1!==r.opt.autoplay&&r.videoEl.play())}),r.opt.resize&&v.addEventListener("resize",r._resize,!1),this.startTime=(new Date).getTime(),this.opt.src.forEach(function(e,t,o){var i,n,a=document.createElement("source");for(i in e)e.hasOwnProperty(i)&&(n=e[i],a.setAttribute(i,n));r.videoEl.appendChild(a)}),r.opt.isMobile&&r.opt.playButton&&(r.opt.videoEl.addEventListener("timeupdate",function(){r.onLoadCalled||(r.opt.onLoad&&r.opt.onLoad(),r.onLoadCalled=!0)}),r.opt.playButton.addEventListener("click",function(){r.opt.pauseButton.style.display="inline-block",this.style.display="none",r.videoEl.play()},!1),r.opt.pauseButton.addEventListener("click",function(){this.style.display="none",r.opt.playButton.style.display="inline-block",r.videoEl.pause()},!1))},this.resize=function(){if(!("object-fit"in document.body.style)){var e=this.videoEl.videoWidth,t=this.videoEl.videoHeight,o=(e/t).toFixed(2),i=this.opt.container,n=v.getComputedStyle(i),a=parseInt(n.getPropertyValue("width")),r=parseInt(n.getPropertyValue("height"));if("border-box"!==n.getPropertyValue("box-sizing")){var d=n.getPropertyValue("padding-top"),l=n.getPropertyValue("padding-bottom"),s=n.getPropertyValue("padding-left"),c=n.getPropertyValue("padding-right");d=parseInt(d),l=parseInt(l),a+=(s=parseInt(s))+(c=parseInt(c)),r+=d+l}if(r/t<a/e)var p=a,u=Math.ceil(p/o);else u=r,p=Math.ceil(u*o);this.videoEl.style.width=p+"px",this.videoEl.style.height=u+"px"}}}}(window),function(){if($(".video-bg-container__video").length){var e=$(".video-bg-container__video").data("video-fundo");(new Bideo).init({videoEl:document.querySelector(".video-bg-container__video"),container:document.querySelector(".video-bg-container"),resize:!0,isMobile:window.matchMedia("(max-width: 768px)").matches,playButton:document.querySelector("#play"),pauseButton:document.querySelector("#pause"),src:[{src:e,type:"video/mp4"},{src:"night.webm",type:'video/webm;codecs="vp8, vorbis"'}],onLoad:function(){document.querySelector(".video-bg-container__cover").style.display="none"}})}}(),function(t){t(document).ready(function(){t(".js-botao-trailer").on("click",function(){var e=t(this).data("video");t(".overlay-trailer").toggleClass("overlay-trailer--ativo"),t(".overlay-trailer__carrega-video").html('<div class="videoWrapper js-trailer-overlay-wrapper">'+e+"</div>")}),t(".js-fechar-overlay").on("click",function(){t(".overlay-trailer").toggleClass("overlay-trailer--ativo"),t(".js-trailer-overlay-wrapper").remove()})})}(jQuery),function(o){o(document).ready(function(){var t=0;function e(){var e=o(window).scrollTop();t<e?o(".header").hasClass("header-logado")?o(".header").css({top:"-30px"}):o(".header").css({top:"-60px"}):o(".header").hasClass("header-logado")?o(".header").css({top:"30px"}):o(".header").css({top:"0"}),t=e}e(),o(window).scroll(function(){e()}),o(".js-controla-menu").on("click",function(){o(".menu").toggleClass("menu-mobile-ativo")})})}(jQuery),function(e){e(document).ready(function(){e("div.accordion").on("click",function(){e(this).parent().find("div.accordion-filho").slideToggle("slow"),e(this).parent().find("div.accordion .seta-baixo").toggleClass("seta-baixo--ativo")})})}(jQuery),jQuery(document).ready(function(){console.log("Bem vindo ao tema da Pagu Pictures")});