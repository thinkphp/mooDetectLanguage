Class: Request.DetectLanguage (#Request.DetectLanguage)
========================================================

This class allows you to detect the language of blocks of text within a webpage. It uses AJAX Language API for Detection.


Request.DetectLanguage Method: constructor(#Request.DetectLanguage: constructor)
--------------------------------------------------------------------------------

### Syntax: 

var d = new Request.DetectLanguage([options]);

#### Arguments:
  
     options (*object*) (optional) All options from Request.JSON.      

### Returns:

A Request.DetectLanguage instance.

### Events:

All the events you know from Request.JSON.

#### success

Fired when the request has completed. This overrides the signature of the Request.JSON success event.

#### Signature:

     onSuccess(resp, origresp);

##### Arguments:

- resp (*Array with an object*) This vector 'resp' contains an object with 3 keys which means:
'l'(*String*) - language
'r'(*Boolean*) - true/false if is reliable or not.
'c'(*Float*) - the confidence measured by a real number.  

- origresp (*Object*) response from google api detection 
                 A possible response from service:  
                 {"responseData": {"language":"fr",
                                   "isReliable":false,
                                   "confidence":0.3551673}, 
                 "responseDetails": null, 
                 "responseStatus": 200} 

### Request.DetectLanguage Method: detect (#Request.DetectLanguage : detect)

    This public method make a AJAX request and send the desired text to the PHP.

#### Syntax:
     var d = new Request.DetectLanguage(options);
     d.detect('Mootools est un framework Javascript compact, modulaire, oriente object.');    
     //return Language: french, isReliable: false, confidence: 0.3551673

#### Arguments:

     text (*String*) Desired blocks of text you want to detect.

#### Returns:

     none.
