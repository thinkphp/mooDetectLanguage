Class: Request.DetectLanguage (#Request.DetectLanguage)
========================================================


Request.DetectLanguage Method: constructor(#Request.DetectLanguage: constructor)
--------------------------------------------------------------------------------

### Syntax: 

var d = new Request.DetectLanguage([options]);

#### Arguments:
  
     options - (*Object*) (optional) All options from Request.JSON.      

### Returns:

A Request.DetectLanguage instance.

### Events:

All the events you know from Request.JSON.

#### success

Fired when the request has completed. This overrides the signature of the Request.JSON success event.

#### Signature:

     onSuccess(resp, origresp);

##### Arguments:



### Request.DetectLanguage Method: detect (#Request.DetectLanguage : detect)


#### Syntax:
     var d = new Request.DetectLanguage(options);
     d.detect('Mootools est un framework Javascript compact, modulaire, oriente objet.');    
     //return Language: french, isReliable: false, confidence: 0.3551673
