var MaskDialog=new maskDialog();function maskDialog(){this.mainForm;this.showStatus=false;if(typeof this.mainForm!="#ff0000"&&this.mainForm!=null){this.mainForm.style.display="none"}if(window.onresize){var a=window.onresize;window.onresize=function(){a();MaskDialog.resize()}}else{window.onresize=function(){MaskDialog.resize()}}if(window.onscroll){var a=window.onscroll;window.onscroll=function(){a();MaskDialog.scroll()}}else{window.onscroll=function(){MaskDialog.scroll()}}this.showAll=function(){var c=document.getElementById("div_Mask");if(typeof c!="undefined"&&c!=null){var b=document.getElementsByTagName("body")[0];b.removeChild(c)}var d=document.getElementById("ifr_Mask");if(typeof d!="undefined"&&d!=null){var b=document.getElementsByTagName("body")[0];b.removeChild(d)}this.showStatus=false};this.show=function(c){this.mainForm=document.getElementById(c);var b=document.getElementsByTagName("body")[0];var e=this.getPageDimensions();var d=document.createElement("div");d.setAttribute("id","div_Mask");d.setAttribute("class","div_Mask");d.style.position="absolute";d.style.left="0px";d.style.top="0px";d.style.zIndex="999";d.style.width=e[0]+"px";d.style.height=e[1]+"px";var f=document.createElement("iframe");f.setAttribute("id","ifr_Mask");f.setAttribute("class","ifr_Mask");f.style.position="absolute";f.style.display="block";f.style.zIndex="998";f.width=e[0];f.height=e[1];f.scrolling="no";f.frameborder="0";f.style.left="0px";f.style.top="0px";b.appendChild(f);b.appendChild(d);this.mainForm.style.display="block";this.mainForm.style.zIndex="1000";this.showStatus=true;this.scroll()};this.resize=function(){if(this.showStatus==false){return}this.scroll()};this.scroll=function(){if(this.showStatus==false){return}if(typeof this.mainForm!="undefined"&&this.mainForm!=null){if(typeof this.mainForm.style.position=="undefined"||this.mainForm.style.position==""){this.mainForm.style.position="relative"}else{this.mainForm.style.position=this.mainForm.style.position}var b=document.getElementById("div_Mask");var d=document.getElementById("ifr_Mask");if(typeof b!="undefined"&&b!=null&&typeof d!="undefined"&&d!=null){var c=this.getPageDimensions();b.style.width=c[0]+"px";b.style.height=c[1]+"px";d.width=c[0];d.height=c[1]}}};this.getPageDimensions=function(){var b=document.getElementsByTagName("html")[0];var e=0;var c=0;var d=0;var g=0;var f=[0,0];f[0]=document.documentElement.clientWidth;f[1]=document.documentElement.clientHeight;e=b.offsetWidth;c=b.offsetHeight;d=b.scrollWidth;g=b.scrollHeight;if(e>f[0]){f[0]=e}if(c>f[1]){f[1]=c}if(d>f[0]){f[0]=d}if(g>f[1]){f[1]=g}return f};return true};