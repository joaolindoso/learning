  /** @version 2.2.17 @source http://softwarepublico.gov.br/gitlab/govbr/barra-govbr/ @license magnet:?xt=urn:btih:90dc5c0be029de84e523b9b3922520e79e0e6f08&dn=cc0.txt CC0 */  !function(){var a,t,r,i,l='<div id="wrapper-barra-brasil"><div class="brasil-flag"><a href="http://brasil.gov.br" class="link-barra">Brasil</a></div><span class="acesso-info"><a href="http://servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Servi&ccedil;os</a></span><nav><ul id="lista-barra-brasil" class="list"><li><a href="#" id="menu-icon"></a></li><li class="list-item first"><a href="http://www.simplifique.gov.br" class="link-barra">Simplifique!</a></li><li class="list-item"><a href="http://brasil.gov.br/participacao-social" class="link-barra">Participe</a></li><li class="list-item"><a href="http://www.acessoainformacao.gov.br" class="link-barra">Acesso &agrave; informa&ccedil;&atilde;o</a></li><li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legisla&ccedil;&atilde;o</a></li><li class="list-item last last-item"><a href="http://www.brasil.gov.br/canais-do-executivo-federal" class="link-barra">Canais</a></li></ul></nav><span id="brasil-vlibras"><a class="logo-vlibras" id="logovlibras" href="#"></a><span class ="link-vlibras"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=" class="barralazy" data-src="//barra.brasil.gov.br/imagens/vlibras.gif" width="132" height="116">&nbsp;<br>O conte&uacute;do desse portal pode ser acess&iacute;vel em Libras usando o <a href="http://www.vlibras.gov.br">VLibras</a></span></span></div>';a=document.getElementById("barra-brasil"),a&&(a.removeAttribute("style"),a.innerHTML=l,r=document.getElementsByTagName("head")[0]),t=function(){var a,t;for(t=document.getElementsByTagName("meta"),a=0;a<t.length;){if("creator.productor"===t[a].getAttribute("property"))return"&orgao="+t[a].getAttribute("content");a++}return""},i=document.getElementById("barra-brasil-orgao"),i.setAttribute("href","http://www.servicos.gov.br/?pk_campaign=barrabrasil"+t()),!function(a){var t,r,i,l,s,e,M,o,A;for(t=function(a,t){var r,i,l,s,e,M;if(document.querySelectorAll)t=document.querySelectorAll(a);else{for(s=document,r=s.styleSheets[0]||s.createStyleSheet(),r.addRule(a,"f:b"),M=s.all,i=0,l=[],e=M.length;e>i;)M[i].currentStyle.f&&l.push(M[i]),i++;r.removeRule(0),t=l}return t},i=function(t,r){a.addEventListener?document.getElementById("logovlibras").addEventListener(t,r,!1):a.attachEvent?document.getElementById("logovlibras").attachEvent("on"+t,r):this["on"+t]=r},r=function(a,t){return Object.prototype.hasOwnProperty.call(a,t)},e=new Array,A=t("img.barralazy"),o=function(){var a;for(a=0;a<e.length;)l(e[a])&&M(e[a],function(){e.splice(a,a)}),a++},M=function(a,t){var r,i;r=new Image,i=a.getAttribute("data-src"),r.onload=function(){a.parent?a.parent.replaceChild(r,a):a.src=i,t&&t()},r.src=i},l=function(t){var r;return r=t.getBoundingClientRect(),r.top>=0&&r.left>=0&&r.top<=(a.innerHeight||document.documentElement.clientHeight)},s=0;s<A.length;)e.push(A[s]),s++;i("click",o),i("mouseover",o),i("focus",o)}(this),window._barrabrasil={insere_css:function(a){var t;return t=document.createElement("style"),t.setAttribute("type","text/css"),t.setAttribute("media","all"),t.appendChild(document.createTextNode(a)),r.appendChild(t)}}}(),window._barrabrasil.insere_css('#barra-brasil div,#barra-brasil a,#barra-brasil ul,#barra-brasil li{margin:0;padding:0;font-size:100%;font-family:inherit;vertical-align:baseline;border:none}#barra-brasil ul{list-style:none}@font-face{font-family:"Open Sans";font-style:normal;font-weight:700;src:local("Open Sans Bold"),local("OpenSans-Bold"),url("//barra.brasil.gov.br/static/opensans-bold.woff") format("woff")}#barra-brasil{height:32px;background:#f1f1f1;font-weight:bold;font-size:12px;line-height:32px;font-family:"Open Sans",Arial,Helvetica,sans-serif;border-bottom:1px solid #dfdfdf;box-sizing:content-box}#barra-brasil a{text-decoration:none}body.contraste #barra-brasil,body.contraste .link-vlibras{background:#000 !important}body.contraste #barra-brasil .link-barra,body.contraste #barra-brasil .link-vlibras{color:#FF0 !important;text-decoration:underline}div#wrapper-barra-brasil{position:relative;margin:0 auto;width:100%;max-width:960px;height:100%}#barra-brasil .brasil-flag{float:left;padding:7px 0 6px;width:115px;border-right:2px solid #dfdfdf}#barra-brasil .brasil-flag .link-barra{display:block;padding-left:42px;width:43px;background:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2226%22%20height%3D%2219%22%20viewBox%3D%220%200%201000%20700%22%3E%3Cpath%20fill%3D%22%2300923F%22%20d%3D%22M0%200h1000v700H0z%22%2F%3E%3Cpath%20fill%3D%22%23F8C300%22%20d%3D%22M500%2085L85%20350l415%20265%20415-265L500%2085z%22%2F%3E%3Ccircle%20fill%3D%22%2328166F%22%20cx%3D%22499%22%20cy%3D%22350%22%20r%3D%22174%22%2F%3E%3Cpath%20fill%3D%22%23FFF%22%20d%3D%22M395%20296c103%200%20199%2038%20272%20101%202-8%204-17%205-26-75-61-172-98-277-98-18%200-36%201-53%203-3%208-6%2016-9%2025%2020-3%2041-4%2063-4z%22%2F%3E%3C%2Fsvg%3E") 8px center no-repeat;text-transform:uppercase;line-height:19px}#barra-brasil #brasil-vlibras{position:absolute;top:0;right:0}#barra-brasil #brasil-vlibras .logo-vlibras{background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyOSIgaGVpZ2h0PSIyOSI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI2Ni4yNTAzOCwtMjMxLjY4NTk0KSI+PHBhdGggZD0ibTI5Mi40IDIzNy44Yy0wLjEgMC0wLjItMC4xLTAuMi0wLjIgMC0xLTEuOC0yLjYtNC4xLTIuNmwtMi41IDAtNC44IDMuNi00LjgtMy42LTIuNSAwYy0yLjQgMC00LjEgMS42LTQuMSAyLjYgMCAwLjEtMC4xIDAuMi0wLjIgMC4yLTAuMSAwLTAuMi0wLjEtMC4yLTAuMiAwLTEuNCAyLjEtMy4xIDQuNi0zLjFsMi40IDAgMC42LTAuNmMwLjEtMC4xIDAuMi0wLjEgMC4zIDBsMy45IDQuNiAzLjktNC42YzAuMS0wLjEgMC4yLTAuMSAwLjMgMGwwLjYgMC42IDIuNCAwYzIuNSAwIDQuNiAxLjcgNC42IDMuMSAwIDAuMS0wLjEgMC4yLTAuMiAwLjJ6bS0zIDEwLjRjLTAuMSAwLjctMC4yIDEtMC4zIDEgMCAwLjEtMC4xIDAuMS0wLjIgMC4xLTAuMSAwLTAuMS0wLjEtMC4xLTAuMiAwIDAgMC4xLTAuMyAwLjItMC45IDAuMS0wLjYtMC4yLTEuMS0wLjItMS4xIDAtMC4xIDAtMC4yIDAuMS0wLjIgMC4xIDAgMC4xIDAgMC4yIDAgMCAwIDAgMCAwIDAuMSAwIDAgMC4zIDAuNiAwLjIgMS4zem0tMSAwLjhjMCAwLjEtMC4xIDAuMS0wLjIgMC4xLTAuMSAwLTAuMS0wLjEtMC4xLTAuMiAwIDAgMC4xLTAuMyAwLjEtMC45IDAtMC42LTAuMy0xLjEtMC4zLTEuMSAwLTAuMSAwLTAuMiAwLjEtMC4yIDAuMSAwIDAuMSAwIDAuMiAwIDAgMCAwIDAgMCAwIDAgMCAwLjMgMC42IDAuMyAxLjMgMCAwLjctMC4xIDEtMC4yIDF6bS0wLjctMC40Yy0wLjMgMS4yLTAuOCAyLjItMC45IDIuNi0wLjIgMC40LTAuMyAwLjktMC4yIDIuMiAwIDEuMyAwIDIuMi0wLjEgMi41IDAgMC4yLTAuMiAwLjMtMC40IDAuMy0wLjIgMC0wLjMtMC4xLTAuNC0wLjQtMC4xLTAuNS0wLjMtMi42LTAuMy0yLjkgMC0wLjItMC4yLTAuNC0wLjMtMC40LTAuMSAwLTAuMiAwLjEtMC4zIDAuNS0wLjIgMC45LTAuNSAzLjEtMC42IDMuNi0wLjEgMC41LTAuMyAwLjYtMC40IDAuNi0wLjEgMC0wLjEgMC0wLjEgMCAwIDAgMCAwIDAgMC0wLjEgMC0wLjQgMC0wLjQtMC40IDAtMC41IDAuNC0zLjUgMC40LTMuOCAwLTAuMiAwLTAuMy0wLjEtMC4zLTAuMSAwLTAuMSAwLjEtMC4yIDAuMi0wLjMgMC40LTEuNyAyLjktMi4xIDMuNy0wLjEgMC4yLTAuMiAwLjItMC40IDAuMi0wLjEgMC0wLjIgMC0wLjMtMC4xLTAuMS0wLjEtMC4zLTAuNC0wLjItMC42IDAuMS0wLjIgMS41LTMuNCAxLjctMy44IDAuMS0wLjMgMC4xLTAuNS0wLjEtMC41LTAuMSAwLTAuMiAwLjEtMC40IDAuMi0wLjUgMC41LTIuNCAyLjUtMi43IDIuNy0wLjEgMC4xLTAuMiAwLjItMC4zIDAuMi0wLjEgMC0wLjItMC4xLTAuMy0wLjItMC4yLTAuMi0wLjItMC40LTAuMS0wLjYgMC4yLTAuMiAyLjYtMy4zIDMtNC4xIDAuNC0wLjcgMS0xLjktMC4yLTEuOS0wLjEgMC0wLjEgMC0wLjIgMC0wLjUgMC0wLjggMC4xLTEuMSAwLjEtMC41IDAtMC43LTAuMS0wLjgtMC4xLTAuMi0wLjEtMC42LTAuMy0wLjUtMC42IDAuMS0wLjIgMC43LTAuMSAxLTAuMiAwLjItMC4xIDAuMi0wLjEgMC4yLTAuMSAwIDAgMS4xLTAuMyAxLjgtMC43IDAuNy0wLjQgMi4zLTEuMSAyLjctMS4xIDAuMiAwIDAuNC0wLjEgMC42LTAuMSAwLjMgMCAwLjYgMCAwLjcgMC4xIDAuMyAwLjEgMC42IDAuOSAyIDEuNSAwIDAgMC42IDAuNiAwLjMgMS44em0tMTEuNyAyLjJjLTAuNC0xLjItMC42LTIuMy0wLjYtMi43LTAuMS0wLjQtMC4zLTAuOS0xLTEuOS0wLjctMS0xLjItMS44LTEuMy0yLjEtMC4xLTAuMiAwLjEtMC41IDAuNC0wLjUgMC4xIDAgMC4yIDAgMC4zIDAuMiAwLjQgMC40IDEuNyAyIDEuOSAyLjIgMC4xIDAuMSAwLjMgMC4yIDAuNCAwLjIgMC4yIDAgMC4yLTAuMSAwLjEtMC42LTAuMy0wLjktMS4zLTIuOS0xLjUtMy4zLTAuMy0wLjcgMC4xLTAuNyAwLjEtMC43IDAgMCAwLjEtMC4xIDAuMi0wLjEgMC4xIDAgMC4yIDAgMC4zIDAuMiAwLjIgMC40IDEuNiAzLjIgMS44IDMuNCAwLjEgMC4xIDAuMiAwLjIgMC4zIDAuMiAwLjEgMCAwLjEtMC4xIDAuMS0wLjMgMC0wLjUtMC4yLTMuMy0wLjMtNC4yIDAtMC4zIDAuMy0wLjUgMC41LTAuNSAwIDAgMCAwIDAgMCAwLjIgMCAwLjQgMC4yIDAuNSAwLjQgMC4xIDAuMiAwLjYgMy43IDAuNyA0LjIgMCAwLjIgMC4yIDAuNCAwLjMgMC40IDAuMSAwIDAuMi0wLjEgMC4zLTAuNCAwLjEtMC43IDAuNy0zLjQgMC43LTMuNyAwLTAuMyAwLjItMC40IDAuNC0wLjQgMCAwIDAuMSAwIDAuMSAwIDAuMiAwIDAuNCAwLjIgMC40IDAuNSAwIDAuMy0wLjMgMy43LTAuMiA0LjgtMC41IDAuMi0xIDAuNC0xLjMgMC40bDAgMCAwIDAtMC4yIDAuMWMwIDAtMC4xIDAtMC4yIDAtMC40IDAtMSAwLTEuMyAwLjYtMC4xIDAuMy0wLjIgMC42LTAuMSAwLjggMC4yIDAuNSAwLjggMC44IDAuOSAwLjkgMCAwIDAgMCAwIDAgMC4yIDAuMSAwLjUgMC4yIDEuMSAwLjIgMC4zIDAgMC42IDAgMS4xLTAuMS0wLjEgMC4yLTAuMiAwLjQtMC4zIDAuNmwtMC4xIDAuMWMtMC4yIDAuMy0wLjggMS4yLTEuOCAyLjUtMC4yIDAtMC4zIDAtMC41IDAtMC4zIDAtMC42IDAtMC45IDAuMSAwIDAtMC44LTAuMS0xLjMtMS4zem0wLjggMi4yYzAgMC4xLTAuMSAwLjEtMC4yIDAuMSAwIDAgMCAwLTAuMSAwIDAgMC0wLjYtMC4yLTEtMC44LTAuNC0wLjYtMC41LTAuOS0wLjUtMC45IDAtMC4xIDAtMC4yIDAuMS0wLjIgMC4xIDAgMC4yIDAgMC4yIDAuMSAwIDAgMC4xIDAuMyAwLjQgMC44IDAuNCAwLjUgMC45IDAuNyAwLjkgMC43IDAuMSAwIDAuMSAwLjEgMC4xIDAuMnptLTAuOSAwLjRjMCAwLjEtMC4xIDAuMS0wLjEgMC4xIDAgMC0wLjEgMC0wLjEgMCAwIDAtMC42LTAuMy0wLjktMC45LTAuNC0wLjYtMC40LTAuOS0wLjQtMSAwLTAuMSAwLjEtMC4yIDAuMS0wLjIgMC4xIDAgMC4yIDAuMSAwLjIgMC4xIDAgMCAwIDAuMyAwLjQgMC44IDAuMyAwLjUgMC44IDAuOCAwLjggMC44IDAuMSAwIDAuMSAwLjEgMC4xIDAuMnptMTQuOS0yMS44LTIwLjIgMGMtMi40IDAtNC40IDItNC40IDQuNGwwIDIwLjJjMCAyLjQgMiA0LjQgNC40IDQuNGwyMC4yIDBjMi40IDAgNC40LTIgNC40LTQuNGwwLTIwLjJjMC0yLjQtMi00LjQtNC40LTQuNCIgZmlsbD0iIzFjNGY5YyIvPjwvZz48L3N2Zz4K") 8px center no-repeat;position:absolute;top:0;right:0;width:43px;height:32px;display:block}#barra-brasil #brasil-vlibras .link-vlibras{height:0;top:32px;transition:0.1s;width:166px !important;display:block;border:2px solid #dfdfdf;color:#606060;visibility:hidden;position:relative}#barra-brasil #brasil-vlibras .link-vlibras a:hover,#barra-brasil #brasil-vlibras .link-vlibras a:focus,#barra-brasil #brasil-vlibras .link-vlibras a:active{visibility:visible;background:#f1f1f1;z-index:8}#barra-brasil #brasil-vlibras .logo-vlibras:hover+.link-vlibras,#barra-brasil #brasil-vlibras .logo-vlibras:active+.link-vlibras,#barra-brasil #brasil-vlibras .logo-vlibras:focus+.link-vlibras,#barra-brasil #brasil-vlibras .link-vlibras:hover,#barra-brasil #brasil-vlibras .link-vlibras:active,#barra-brasil #brasil-vlibras .link-vlibras:focus{width:166px !important;height:50px !important;display:inline-table;border:2px solid #dfdfdf;padding:10px 24px 10px 24px;visibility:visible;background:#f1f1f1;z-index:8}#barra-brasil .eselo{position:absolute;top:0;right:44px;display:block;font-size:1.25em;color:blue}#barra-brasil .acesso-info{position:absolute;left:130px}#barra-brasil .list{position:absolute;top:0;right:40px;width:auto}#barra-brasil .list-eselo{right:90px !important}#barra-brasil .list .first{border-left:2px solid #dfdfdf}#barra-brasil .list-item{display:inline-block;height:32px;line-height:32px;border-right:2px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 15px 8px 13px}#barra-brasil .link-barra{color:#606060}#barra-brasil #menu-icon{position:absolute;top:3px;border-top:15px double #606060;border-bottom:5px solid #606060;display:none;width:20px;right:5px}@media only screen and (max-width: 959px){#barra-brasil #menu-icon{display:inline-block;padding:5px 3px 0px 3px}#barra-brasil .list .first{border-left:1px solid #dfdfdf}#barra-brasil nav:hover #menu-icon,#barra-brasil nav:active #menu-icon,#barra-brasil nav:focus #menu-icon{background-color:#DDD}body.contraste #barra-brasil nav:hover #menu-icon,body.contraste #barra-brasil nav:active #menu-icon,body.contraste #barra-brasil nav:focus #menu-icon{background-color:#606060 !important}#barra-brasil ul.list,#barra-brasil ul.list:active,#barra-brasil ul.list:focus{overflow:hidden;height:0px;transition:0.3s;padding-top:32px;width:auto;position:absolute;z-index:9}#barra-brasil .list-item{display:block;text-align:center;height:30px;background:#EEE;border:1px solid #dfdfdf}#barra-brasil .list-item a{padding:8px 30px 8px 28px}body.contraste #barra-brasil .list-item{background:#000 !important}body.contraste #menu-icon{border-top:15px double #fff !important;border-bottom:5px solid #fff !important}#barra-brasil .list a:active li,#barra-brasil .list a:focus li,#barra-brasil .list a:hover li{background:#DDD}body.contraste #barra-brasil .list a:active li,body.contraste #barra-brasil .list a:focus li,body.contraste #barra-brasil .list a:hover li{background:#606060 !important}#barra-brasil nav:active ul.list,#barra-brasil nav:focus ul.list,#barra-brasil nav:hover ul.list{height:165px;transition:0.5s}div#wrapper-barra-brasil{overflow:visible}}@media screen and (min-width: 960px){#wrapper-barra-brasil{width:960px}}@media print{#barra-brasil .list{display:none}#barra-brasil .acesso-info .link-barra:after{content:" Barra GovBr"}}'),!function(){var a,t='<div id="wrapper-footer-brasil"><a href="http://www.acessoainformacao.gov.br/"><span class="logo-acesso-footer"></span></a><a class="logo-governo-federal" href="http://www.brasil.gov.br/" alt="Governo Federal" title="Governo Federal"></a></div>';a=document.getElementById("footer-brasil"),a&&(a.innerHTML=t),window._footerbrasil={insere_css:function(a){var t,r;return r=document.createElement("style"),r.setAttribute("type","text/css"),r.setAttribute("media","all"),r.appendChild(document.createTextNode(a)),t=document.getElementsByTagName("head")[0],t.appendChild(r)}}}(),window._footerbrasil.insere_css('div#wrapper-footer-brasil{position:relative;overflow:hidden;margin:0 auto;width:auto;padding:0 20px;max-width:960px}#wrapper-footer-brasil .logo-acesso-footer{float:left;width:117px;background:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20117%2049%22%20height%3D%2249%22%20width%3D%22117%22%20shape-rendering%3D%22geometricPrecision%22%20text-rendering%3D%22geometricPrecision%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B.a%20%7Bfont%3A%20normal%20bold%2011px%20Open%20Sans%2C%20sans-serif%3B%7D%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Ccircle%20cx%3D%2222%22%20cy%3D%2223%22%20r%3D%2222%22%20fill%3D%22%23f6a800%22%2F%3E%3Cpath%20style%3D%22stroke%3A%23f6a800%3Bstroke-width%3A4%3Bstroke-linejoin%3Around%3B%22%20d%3D%22m%204%2C43%203%2C-6%204%2C3%20z%22%2F%3E%3Ccircle%20r%3D%224.5%22%20cy%3D%2211%22%20cx%3D%2222%22%20fill%3D%22%2300692c%22%2F%3E%3Cg%20fill%3D%22%23fff%22%3E%3Ctext%20x%3D%2248%22%20y%3D%2222%22%3E%3Ctspan%20class%3D%22a%22%20y%3D%2218%22%3EAcesso%20%C3%A0%3C%2Ftspan%3E%3Ctspan%20class%3D%22a%22%20x%3D%2248%22%20y%3D%2231%22%3EInforma%C3%A7%C3%A3o%3C%2Ftspan%3E%3C%2Ftext%3E%3C%2Fg%3E%3Cpath%20style%3D%22stroke%3A%2300692c%3Bstroke-width%3A9%3Bstroke-linecap%3Around%3B%22%20d%3D%22m%2022%2C23%20v%2013%22%2F%3E%3C%2Fsvg%3E") center no-repeat;height:49px}#wrapper-footer-brasil .logo-governo-federal{float:left;width:149px;height:42px;background-repeat:no-repeat;background-position:bottom right;background-image:url("data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20enable-background%3D%22new%200%200%20115.5%2033.9%22%20version%3D%221.1%22%20viewBox%3D%220%200%20115.5%2033.9%22%20xml%3Aspace%3D%22preserve%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E.m%7Bfill%3A%23FFF%3B%7D%3C%2Fstyle%3E%3Cpath%20class%3D%22m%22%20d%3D%22M4.1%2C32.3h40.3V22C33.5%2C20.3%2C13.2%2C25.4%2C4.1%2C32.3z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m53.2%206.2c0-0.7-0.2-1.3-0.6-1.7s-1-0.6-1.7-0.6h-2.1l-0.1%200.1v6.6h1.2v-2.2h0.9c0.4%200%200.7%200%201-0.1s0.5-0.2%200.7-0.4%200.4-0.4%200.5-0.7%200.2-0.7%200.2-1zm-1.4%200.4c0%200.1-0.1%200.3-0.2%200.4s-0.1%200.2-0.2%200.3-0.2%200.1-0.3%200.1h-1.1v-2.5h0.9c0.2%200%200.4%200%200.5%200.1l0.3%200.3c0.1%200.1%200.1%200.2%200.2%200.4v0.4c-0.1%200.2-0.1%200.3-0.1%200.5z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22M55.9%2C3.9h-0.8l-2.2%2C6.6v0.1c0.2%2C0.1%2C0.4%2C0.1%2C0.6%2C0.1h0.6l0.5-1.5H57l0.2%2C0.9c0.1%2C0.3%2C0.2%2C0.5%2C0.3%2C0.6%20%20s0.3%2C0.2%2C0.6%2C0.2s0.5%2C0%2C0.7-0.2L56.6%2C4C56.4%2C4%2C56.2%2C3.9%2C55.9%2C3.9z%20M55%2C8.1l0.4-1.2l0.4-1.6h0.1l0.5%2C1.9l0.3%2C1H55V8.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m59%203.9v1.2h1.7v5.6h1.4v-5.6h0.9c0.2%200%200.4%200%200.5-0.1s0.2-0.2%200.2-0.4%200-0.4-0.1-0.5h-4.6v-0.2z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m69.1%2010l-0.2-0.4-0.4-1-0.3-0.6c-0.1-0.2-0.2-0.2-0.4-0.3%200.2-0.1%200.3-0.2%200.5-0.3%200.1-0.1%200.3-0.2%200.4-0.4%200.1%200%200.2-0.2%200.3-0.4s0.1-0.4%200.1-0.6c0-0.7-0.2-1.2-0.6-1.5-0.4-0.4-1-0.5-1.7-0.5h-2.3v6.6h1.3v-2.5h0.6c0.2%200%200.4%200.1%200.6%200.2%200.1%200.1%200.2%200.3%200.3%200.5l0.4%201.2c0.1%200.3%200.2%200.5%200.3%200.6s0.3%200.2%200.5%200.2%200.4%200%200.5-0.1c0.2-0.1%200.3-0.2%200.4-0.3-0.1-0.1-0.2-0.3-0.3-0.4zm-2.4-3h-0.9v-2.1h0.9c0.7%200%201%200.4%201%201.1s-0.3%201-1%201z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m75.6%203.9h-0.8l-2.2%206.6v0.1c0.2%200.1%200.4%200.1%200.6%200.1h0.6l0.5-1.5h2.3l0.2%200.9c0.1%200.3%200.2%200.4%200.3%200.6%200.1%200.1%200.3%200.2%200.6%200.2s0.5%200%200.7-0.2l-2.1-6.7c-0.2%200-0.5-0.1-0.7-0.1zm-0.9%204.2l0.3-1.3%200.4-1.6h0.1l0.5%201.9%200.3%201h-1.6z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m83.7%203.9h-0.8l-2.2%206.6v0.1c0.2%200.1%200.4%200.1%200.6%200.1h0.6l0.5-1.5h2.3l0.3%200.8c0.1%200.3%200.2%200.4%200.3%200.6%200.1%200.1%200.3%200.2%200.6%200.2s0.5%200%200.7-0.2l-2.2-6.6c-0.2%200-0.4-0.1-0.7-0.1zm-0.9%204.2l0.4-1.2%200.4-1.6h0.1l0.5%201.9%200.3%201h-1.7v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m97.7%203.9h-0.8l-2.2%206.6v0.1c0.2%200.1%200.4%200.1%200.6%200.1h0.6l0.5-1.5h2.3l0.3%200.8c0.1%200.3%200.2%200.4%200.3%200.6%200.1%200.1%200.3%200.2%200.6%200.2s0.5%200%200.7-0.2l-2.2-6.6c-0.2%200-0.4-0.1-0.7-0.1zm-0.9%204.2l0.4-1.2%200.4-1.6h0.1l0.5%201.9%200.3%201h-1.7v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m106.1%204.9c-0.2-0.3-0.5-0.6-0.9-0.7-0.4-0.2-0.8-0.3-1.3-0.3h-2.3l-0.1%200.1v6.6l0.1%200.1h2.2c0.3%200%200.7%200%201-0.1s0.6-0.2%200.8-0.4c0.4-0.3%200.7-0.7%200.8-1.2%200.2-0.5%200.2-1%200.2-1.7%200-0.4%200-0.9-0.1-1.3s-0.2-0.7-0.4-1.1zm-0.8%203.1c0%200.2-0.1%200.4-0.1%200.6s-0.1%200.4-0.2%200.5c-0.1%200.2-0.2%200.3-0.4%200.4-0.1%200-0.2%200.1-0.4%200.1h-1.3v-4.6h1.1c0.6%200%201%200.3%201.2%200.8%200.1%200.2%200.2%200.5%200.2%200.8v0.8l-0.1%200.6z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m110.8%204c-0.2%200-0.4-0.1-0.7-0.1h-0.8l-2.2%206.6v0.1c0.2%200.1%200.4%200.1%200.6%200.1h0.6l0.5-1.5h2.3l0.2%200.9c0.1%200.3%200.2%200.4%200.3%200.6%200.1%200.1%200.3%200.2%200.6%200.2s0.5%200%200.7-0.2c0%200-2.1-6.7-2.1-6.7zm-1.6%204.1l0.4-1.2%200.4-1.6h0.1l0.5%201.9%200.3%201h-1.7v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m70.4%204v6.7h1.3v-6.7h-0.7c-0.2-0.1-0.4-0.1-0.6%200z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m92.7%203.9c-0.3%200-0.6%200-0.9%200.1l-0.7%202.7c-0.2%200.8-0.3%201.3-0.4%201.7h-0.1l-0.4-1.7-0.7-2.7c-0.2%200-0.5-0.1-0.8-0.1s-0.6%200-0.9%200.1l-0.5%206.6c0.2%200%200.4%200.1%200.6%200.1s0.5%200%200.6%200l0.2-3.1%200.1-2.1h0.1l1.1%204.1h1.4l1.1-4.2h0.1l0.1%202.1%200.2%203.1h0.6c0.2%200%200.4%200%200.6-0.1l-0.5-6.5c-0.3-0.1-0.6-0.1-0.9-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m55.1%203.5l2.2-0.9c0-0.2-0.1-0.4-0.2-0.6s-0.2-0.3-0.3-0.4l-2.1%201.3c0%200.1%200.1%200.2%200.1%200.3l0.3%200.3z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m63.1%2029.1v2.7c0%200.1%200%200.2%200.1%200.3%200%200.1%200.1%200.1%200.2%200.1h1.2c0.2%200%200.4-0.1%200.4-0.3v-0.2h-1.4v-0.8h1v-0.4h-1v-0.8h1.4v-0.5h-1.9v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m84.8%2029.1v3h0.6v-1.3h1v-0.4h-1v-0.8h1c0.1%200%200.2%200%200.2-0.1%200.1%200%200.1-0.1%200.1-0.2v-0.2h-1.9z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m89%2029.1v2.7c0%200.1%200%200.2%200.1%200.3%200%200.1%200.1%200.1%200.2%200.1h1.2c0.2%200%200.4-0.1%200.4-0.3v-0.2h-1.4v-0.8h1v-0.4h-1v-0.8h1.3v-0.5h-1.8v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m98.3%2029.1v2.7c0%200.1%200%200.2%200.1%200.3%200%200.1%200.1%200.1%200.2%200.1h1.2c0.2%200%200.4-0.1%200.4-0.3v-0.2h-1.4v-0.8h1v-0.4h-1v-0.8h1.3v-0.5h-1.8v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m60.2%2029.1l-0.6%202.5v-0.1c0-0.3-0.1-0.6-0.2-0.8l-0.4-1.4c0-0.1-0.1-0.2-0.1-0.2s-0.1-0.1-0.2-0.1-0.2%200-0.4%200.1l0.8%202.7c0%200.1%200.1%200.2%200.1%200.2h0.7l0.9-3h-0.3c-0.2%200-0.2%200-0.3%200.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m112%2029v2.7c0%200.1%200%200.2%200.1%200.3%200%200.1%200.1%200.1%200.2%200.1h1.1c0.2%200%200.4-0.1%200.4-0.3v-0.2h-1.2v-2.2c0-0.1%200-0.2-0.1-0.3s-0.2-0.1-0.3-0.1h-0.2z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m49.7%2029.1c-0.2%200.1-0.3%200.2-0.4%200.3s-0.2%200.3-0.3%200.5-0.1%200.4-0.1%200.7c0%200.2%200%200.4%200.1%200.6s0.1%200.4%200.2%200.5%200.2%200.2%200.4%200.3%200.3%200.1%200.6%200.1c0.4%200%200.8%200%201.2-0.2v-1.2c0-0.2-0.1-0.4-0.4-0.4h-0.7l-0.1%200.2c0%200.1%200%200.2%200.1%200.2%200%200%200.1%200.1%200.2%200.1h0.3v0.7h-0.5c-0.5%200-0.8-0.4-0.8-1.1s0.3-1.1%200.8-1.1c0.3%200%200.5%200.1%200.8%200.2%200.1%200%200.1-0.1%200.2-0.2%200-0.1%200.1-0.2%200.1-0.2-0.3-0.2-0.7-0.3-1-0.3-0.4%200.2-0.5%200.2-0.7%200.3z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m74.2%2029c-0.1%200-0.2%200-0.2%200.1s-0.1%200.2-0.1%200.3v2l-0.3-0.7-0.8-1.7h-0.7v3h0.6v-2.3l0.3%200.6%200.8%201.7h0.8v-3h-0.4z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m55.8%2029.4c-0.1-0.1-0.2-0.2-0.4-0.3-0.1-0.1-0.3-0.1-0.5-0.1s-0.4%200-0.5%200.1c-0.2%200.1-0.3%200.2-0.4%200.3s-0.2%200.3-0.2%200.5c-0.1%200.2-0.1%200.4-0.1%200.7%200%200.6%200.2%201%200.5%201.3%200.2%200.2%200.5%200.3%200.8%200.3%200.2%200%200.4%200%200.5-0.1%200.2-0.1%200.3-0.2%200.4-0.3s0.2-0.3%200.2-0.5c0.1-0.2%200.1-0.4%200.1-0.7%200-0.2%200-0.5-0.1-0.7s-0.2-0.3-0.3-0.5zm-0.9%202.3c-0.4%200-0.7-0.4-0.7-1.1s0.2-1.1%200.7-1.1c0.4%200%200.7%200.4%200.7%201.1-0.1%200.7-0.3%201.1-0.7%201.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m79.3%2029.9c0-0.2-0.1-0.4-0.2-0.5s-0.2-0.2-0.4-0.3-0.3-0.1-0.5-0.1-0.4%200-0.5%200.1c-0.2%200.1-0.3%200.2-0.4%200.3s-0.2%200.3-0.2%200.5c-0.1%200.2-0.1%200.4-0.1%200.7%200%200.6%200.2%201%200.5%201.3%200.2%200.2%200.5%200.3%200.8%200.3%200.2%200%200.4%200%200.5-0.1%200.2-0.1%200.3-0.2%200.4-0.3s0.2-0.3%200.2-0.5c0.1-0.2%200.1-0.4%200.1-0.7-0.1-0.3-0.1-0.5-0.2-0.7zm-1.1%201.8c-0.4%200-0.7-0.4-0.7-1.1s0.2-1.1%200.7-1.1c0.4%200%200.7%200.4%200.7%201.1-0.1%200.7-0.3%201.1-0.7%201.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m69.6%2031.8c0-0.1-0.1-0.1-0.1-0.2l-0.2-0.4c0-0.1-0.1-0.2-0.1-0.2-0.1-0.1-0.1-0.1-0.2-0.1%200.1%200%200.2-0.1%200.2-0.1%200.1%200%200.1-0.1%200.2-0.2%200-0.1%200.1-0.2%200.1-0.2v-0.3c0-0.3-0.1-0.5-0.3-0.8-0.2-0.2-0.4-0.2-0.8-0.2h-1v3h0.6v-1.2h0.3c0.1%200%200.2%200%200.3%200.1l0.2%200.2%200.2%200.5c0%200.1%200.1%200.2%200.2%200.3s0.1%200.1%200.2%200.1h0.2c0.1%200%200.1-0.1%200.2-0.1-0.1-0.1-0.2-0.1-0.2-0.2zm-1.1-1.3h-0.4v-1h0.4c0.3%200%200.5%200.2%200.5%200.5s-0.2%200.5-0.5%200.5z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m108.7%2029.1h-0.3-0.4l-1%203h0.6l0.2-0.7h1.1l0.1%200.4c0%200.1%200.1%200.2%200.1%200.2%200.1%200%200.2%200.1%200.3%200.1s0.2%200%200.3-0.1l-1-2.9zm-0.8%201.8l0.2-0.6c0.1-0.4%200.2-0.6%200.2-0.8l0.2%200.9%200.1%200.4h-0.7v0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m95.5%2029.5c-0.1-0.1-0.2-0.2-0.4-0.3s-0.4-0.1-0.6-0.1h-1.1v3h1.5c0.1%200%200.2-0.1%200.4-0.2%200.2-0.2%200.3-0.3%200.4-0.6%200.1-0.2%200.1-0.5%200.1-0.8%200-0.2%200-0.4-0.1-0.6%200-0.1-0.1-0.3-0.2-0.4zm-0.3%201.4v0.3c0%200.1%200%200.2-0.1%200.2l-0.2%200.2h-0.9v-2.1h0.5c0.3%200%200.5%200.1%200.6%200.4%200%200.1%200.1%200.2%200.1%200.3v0.4%200.3z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m104.8%2031.8c0-0.1-0.1-0.1-0.1-0.2l-0.2-0.4c0-0.1-0.1-0.2-0.1-0.2-0.1-0.1-0.1-0.1-0.2-0.1%200.1%200%200.2-0.1%200.2-0.1%200.1%200%200.1-0.1%200.2-0.2%200-0.1%200.1-0.2%200.1-0.2v-0.3c0-0.3-0.1-0.5-0.3-0.8-0.2-0.2-0.4-0.2-0.8-0.2h-1v3h0.6v-1.2h0.2c0.1%200%200.2%200%200.3%200.1l0.2%200.2%200.2%200.5c0%200.1%200.1%200.2%200.2%200.3s0.1%200.1%200.2%200.1h0.2c0.1%200%200.1-0.1%200.2-0.1-0.1-0.1-0.1-0.1-0.1-0.2zm-1.1-1.3h-0.4v-1h0.4c0.3%200%200.5%200.2%200.5%200.5-0.1%200.3-0.2%200.5-0.5%200.5z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m78.2%2012.8c-0.5%200-0.9%200-1.2%200.1l-4.3%2013.1%200.1%200.1c0.3%200.1%201.6%200.1%201.9%200l1-3.3h5l0.7%202.3c0.1%200.4%200.3%200.7%200.5%200.9s1.7%200.2%202%200l-4.4-13.2h-1.3zm1%208.4h-2.9l1.2-3.5c0.4-1.2%200.6-2.1%200.8-2.8h0.1c0.3%201.2%200.7%202.4%201%203.5l0.9%202.8h-1.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m109.2%2024.3c-0.6%200-1.2%200-1.8%200.1v-10.3c0-0.5-0.1-0.8-0.3-1s-0.5-0.3-0.9-0.3h-0.8l-0.1%200.1v12c0%200.4%200.1%200.7%200.3%201%200.2%200.2%200.5%200.3%200.9%200.3h5.1c0.8%200%201.2-0.3%201.3-1%200-0.3%200.1-0.5%200.1-0.8h-3.8v-0.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m69.9%2024.2l-0.9-2.3c-0.3-0.9-0.8-1.4-1.4-1.7%200.7-0.2%201.3-0.7%201.8-1.3s0.7-1.4%200.7-2.3c0-1.3-0.4-2.3-1.2-2.9-0.8-0.7-1.9-1-3.3-1l-4.2%200.1-0.1%200.1v13.2c0.3%200.1%201.7%200.1%202.1%200v-5.4h1.6c0.6%200%201%200.1%201.3%200.4s0.5%200.7%200.7%201.2l1%202.6c0.2%200.5%200.3%200.8%200.5%201s1.9%200.1%202.2-0.4c-0.3-0.1-0.6-0.6-0.8-1.3zm-4.3-5.1h-2.2v-4.8h2.2c1.6%200%202.4%200.8%202.4%202.3%200%200.7-0.2%201.2-0.5%201.7-0.4%200.5-1%200.8-1.9%200.8z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m98.8%2012.8v13.3c0.3%200.1%200.7%200.1%201%200.1s0.7%200%201-0.1v-13.3c-0.3-0.1-0.6-0.1-1-0.1-0.3%200-0.7%200.1-1%200.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m92.3%2018.9l-2.3-1c-0.6-0.2-1-0.5-1.2-0.7-0.3-0.3-0.4-0.6-0.4-1.1s0.2-0.9%200.6-1.2%201-0.5%201.7-0.5c1%200%202.1%200.3%203.3%200.9%200.5-0.4%200.7-1%200.8-1.6-1.3-0.7-2.7-1-4-1-0.7%200-1.3%200.1-1.8%200.3-0.6%200.2-1%200.4-1.4%200.8s-0.7%200.8-0.9%201.2c-0.2%200.5-0.3%201-0.3%201.5%200%201.5%200.9%202.6%202.7%203.4l2.3%201c1.2%200.5%201.8%201.2%201.8%202.1%200%200.6-0.2%201-0.7%201.3-0.4%200.3-1%200.5-1.8%200.5-1.3%200-2.6-0.4-3.9-1.3-0.5%200.4-0.8%201-0.9%201.6%201.4%201%202.9%201.5%204.5%201.5%201.7%200%202.9-0.4%203.7-1.1s1.2-1.7%201.2-2.8c0-0.8-0.2-1.5-0.7-2.1-0.6-0.8-1.4-1.3-2.3-1.7z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22M44.4%2C17.1l0.1-13.3H4.1V19L20.3%2C6.2C35.9%2C13.1%2C43.9%2C16.8%2C44.4%2C17.1z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m57%2020.2c-0.2-0.3-0.5-0.6-0.8-0.8s-0.6-0.4-1-0.5c0.6-0.2%201-0.6%201.3-1.1s0.5-1%200.5-1.7c0-1.1-0.4-2-1.1-2.6s-1.8-0.9-3.2-0.9l-4%200.1-0.1%200.1v13.2l0.1%200.2h4.3c1.5%200%202.7-0.3%203.5-1s1.2-1.6%201.2-2.8c0-0.4-0.1-0.8-0.2-1.2s-0.3-0.7-0.5-1zm-6.3-5.9h2.1c1.5%200%202.2%200.7%202.2%202%200%200.3%200%200.5-0.1%200.8-0.1%200.2-0.2%200.5-0.4%200.6-0.2%200.2-0.4%200.3-0.7%200.4s-0.6%200.2-1.1%200.2h-2v-4zm4.8%208.9c-0.1%200.3-0.2%200.5-0.4%200.7s-0.5%200.4-0.8%200.5-0.7%200.2-1.2%200.2h-2.3v-4.7h2.2c0.5%200%200.9%200.1%201.2%200.2s0.6%200.3%200.8%200.5%200.4%200.5%200.5%200.8%200.2%200.6%200.2%200.8c-0.1%200.4-0.2%200.7-0.2%201z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m8.1%2027.1c0.9-5.5%203.9-9.2%209-11.2%201.8-0.7%203.6-1%205.3-1%205.2%200%209.2%202.8%209.2%203.2-0.4%200.1%205-0.6%209.7-0.9-3.8-1.7-10.6-4.7-20.7-9.1l-16.5%2013.2v8.8c1.6-1.3%204.3-3.2%204-3z%22%2F%3E%3Cpath%20class%3D%22m%22%20d%3D%22m22.5%2016.4c-1.5%200-3.1%200.3-4.8%201-4%201.7-6.7%204.7-7.8%208.9%204.4-2.8%209.2-5.4%2020-7.7-1.4-0.9-4.2-2.2-7.4-2.2z%22%2F%3E%3C%2Fsvg%3E")}body.contraste #footer-brasil{background:#000 !important}@media screen and (min-width: 960px){#wrapper-footer-brasil{width:960px}}@media print{#wrapper-footer-brasil{border-top:2px solid #dfdfdf}#wrapper-footer-brasil:before{content:"Barra GovBr";color:#606060;font-size:12px;font-family:"Open Sans",Arial,Helvetica,sans-serif}}');
/** @license-end */