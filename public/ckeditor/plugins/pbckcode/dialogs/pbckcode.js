﻿CKEDITOR.dialog.add("pbckcodeDialog",function(b){void 0===b.config.pbckcode&&(b.config.pbckcode={});var g=["1","2","4","8"],d=CKEDITOR.tools.extend({cls:"",modes:[["HTML","html"],["CSS","css"],["PHP","php"],["JS","javascript"]],theme:"textmate",tab_size:4},b.config.pbckcode,!0),h,f=new PBSyntaxHighlighter(d.highlighter),c,e,i;return{title:b.lang.pbckcode.title,minWidth:600,minHeight:400,contents:[{id:"editor",label:b.lang.pbckcode.editor,elements:[{type:"hbox",children:[{type:"select",id:"code-select",
label:b.lang.pbckcode.mode,items:d.modes,"default":d.modes[0][1],setup:function(a){if(a){a=a.getAscendant("pre",true);this.setValue(a.getAttribute("data-pbcklang"))}},commit:function(a){if(a){a=a.getAscendant("pre",true);a.setAttribute("data-pbcklang",this.getValue())}},onChange:function(){e.setMode("ace/mode/"+this.getValue())}},{type:"select",id:"code-tabsize-select",label:"Tab size",items:g,"default":g[2],setup:function(a){if(a){a=a.getAscendant("pre",true);this.setValue(a.getAttribute("data-pbcktabsize"))}},
commit:function(a){if(a){a=a.getAscendant("pre",true);a.setAttribute("data-pbcktabsize",this.getValue())}},onChange:function(a){if(a){i.convertIndentation(e," ",this.getValue());e.setTabSize(this.getValue())}}}]},{type:"html",html:"<div></div>",id:"code-textarea",style:"position: absolute; top: 80px; left: 10px; right: 10px; bottom: 50px;",setup:function(a){a=a.getHtml();a=a.replace(RegExp("<br/>","g"),"\n");a=a.replace(RegExp("<br>","g"),"\n");a=a.replace(RegExp("&lt;","g"),"<");a=a.replace(RegExp("&gt;",
"g"),">");a=a.replace(RegExp("&amp;","g"),"&");c.setValue(a)},commit:function(a){a.setText(c.getValue())}}]}],onLoad:function(){h=this;c=ace.edit(h.getContentElement("editor","code-textarea").getElement().getId());b.aceEditor=c;c.setTheme("ace/theme/"+d.theme);c.setHighlightActiveLine(true);e=c.getSession();e.setMode("ace/mode/"+d.modes[0][1]);e.setTabSize(d.tab_size);e.setUseSoftTabs(true);i=ace.require("ace/ext/whitespace")},onShow:function(){var a=b.getSelection().getStartElement();a&&(a=a.getAscendant("pre",
true));if(!a||a.getName()!=="pre"){a=new CKEDITOR.dom.element("pre");f.getTag()!=="pre"&&a.append(new CKEDITOR.dom.element("code"));this.insertMode=true}else{f.getTag()!=="pre"&&(a=a.getChild(0));this.insertMode=false}this.element=a;c.setValue("");this.insertMode||this.setupContent(this.element)},onOk:function(){var a,c;a=c=this.element;this.insertMode?f.getTag()!=="pre"&&(c=this.element.getChild(0)):a=c.getAscendant("pre",true);this.commitContent(c);f.setCls(a.getAttribute("data-pbcklang")+" "+d.cls);
c.setAttribute("class",f.getCls());this.insertMode&&b.insertElement(a)}}});CKEDITOR.dialog.on("resize",function(b){b=b.editor.aceEditor;void 0!==b&&b.resize()});
