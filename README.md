Request.DetectLanguage
======================

This class allows you to detect the language of blocks of text within a webpage. It uses AJAX Language API for Detection.

![Screenshot](http://farm5.static.flickr.com/4148/5070795205_8542802e5c_z.jpg)

How to use
----------

First you must to include the JS files in the head of your HTML document:

            #HTML
            <script type="text/javascript" src="mootools.js"></script>
            <script type="text/javascript" src="DetectLanguage.js"></script>

In your JS:
          
           #JS
           window.addEvent('domready',function(){                  
                  var d = new Request.DetectLanguage({
                          url: 'detect.php',
                          onSuccess: function(resp, origresp) {
                                if(window.console){console.log(origresp)} 
                                var resp = resp[0],
                                    result = document.id('result'),
                                    output = '<div><b>Language:</b> '+ resp.l + 
                                             ', <b>isReliable:</b> '+ resp.r +
                                             ', <b>confidence:</b> '+ resp.c; 
                                result.fade('hide');
                                result.fade(1);
                                result.set('html',output);                                 
                          } 
                  });
                  d.detect(document.id('input_text').get('value'));
                  $('detect').addEvent('click',function(){
                           var val = document.id('input_text').get('value');
                           if(val){
                             d.detect(val);
                           }
                  });
           }); 

In your body HTML:
     #HTML 
     <textarea rows="10" cols="105" id="input_text">Mootools est un framework Javascript compact, modulaire, oriente objet.</textarea>
     <br/>
     <input type="button" id="detect" value="detect"> 
     <div id="result"></div>