var btn=$(".btn"),tglnav=$(".toggle-navbar"),navbar=$("nav"),nav_li=$(".nav-li");btn.click(function(){btn.toggleClass("show"),tglnav.toggleClass("column"),navbar.toggleClass("height-265"),nav_li.toggleClass("w-100")}),window.onresize=function(){$(window).width()>720&&navbar.hasClass("height-265")&&(btn.removeClass("show"),tglnav.removeClass("column"),navbar.removeClass("height-265"),nav_li.removeClass("w-100"))};class TypeWriter{constructor(t,i,e=3e3){this.txtElement=t,this.words=i,this.txt="",this.wordIndex=0,this.wait=parseInt(e,10),this.type(),this.isDeleting=!1}type(){const t=this.wordIndex%this.words.length,i=this.words[t];this.isDeleting?this.txt=i.substring(0,this.txt.length-1):this.txt=i.substring(0,this.txt.length+1),this.txtElement.innerHTML=`<span class="txt">${this.txt}</span>`;let e=300;this.isDeleting&&(e/=2),this.isDeleting||this.txt!==i?this.isDeleting&&""===this.txt&&(this.isDeleting=!1,this.wordIndex++,e=500):(e=this.wait,this.isDeleting=!0),setTimeout(()=>this.type(),e)}}function init(){const t=document.querySelector(".txt-type"),i=JSON.parse(t.getAttribute("data-words")),e=t.getAttribute("data-wait");new TypeWriter(t,i,e)}function init1(){const t=document.querySelector(".txt-type1"),i=JSON.parse(t.getAttribute("data-words1")),e=t.getAttribute("data-wait1");new TypeWriter(t,i,e)}function init2(){const t=document.querySelector(".txt-type2"),i=JSON.parse(t.getAttribute("data-words2")),e=t.getAttribute("data-wait2");new TypeWriter(t,i,e)}document.addEventListener("DOMContentLoaded",init),document.addEventListener("DOMContentLoaded",init1),document.addEventListener("DOMContentLoaded",init2),$("textarea").blur(function(){$("#hire textarea").each(function(){$this=$(this),""!=this.value?($this.addClass("focused"),$("textarea + label + span").css({opacity:1})):($this.removeClass("focused"),$("textarea + label + span").css({opacity:0}))})}),$("#hire .field:nth-child(2) input").blur(function(){$("#hire .field:nth-child(2) input").each(function(){$this=$(this),""!=this.value?($this.addClass("focused"),$(".field:nth-child(2) input + label + span").css({opacity:1})):($this.removeClass("focused"),$(".field:nth-child(2) input + label + span").css({opacity:0}))})}),$("#hire .field:nth-child(3) input").blur(function(){$("#hire .field:nth-child(3) input").each(function(){$this=$(this),""!=this.value?($this.addClass("focused"),$(".field:nth-child(3) input + label + span").css({opacity:1})):($this.removeClass("focused"),$(".field:nth-child(3) input + label + span").css({opacity:0}))})}),$("#hire .field:nth-child(4) input").blur(function(){$("#hire .field:nth-child(4) input").each(function(){$this=$(this),""!=this.value?($this.addClass("focused"),$(".field:nth-child(4) input + label + span").css({opacity:1})):($this.removeClass("focused"),$(".field:nth-child(4) input + label + span").css({opacity:0}))})});