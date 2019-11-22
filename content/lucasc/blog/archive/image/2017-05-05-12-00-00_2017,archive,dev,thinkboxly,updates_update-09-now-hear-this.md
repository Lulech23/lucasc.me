<!--t Update 09 - Now Hear This t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-09-now-hear-this/update-banner-1024x512.jpg image-->
  
It's that time again: another two weeks have passed and April is now behind us, placing VNgen firmly in its sixth month of active development. It's come a long ways in that period of time, and from now on it's only a matter of putting on the finishing touches before VNgen is ready for market.  
  
However, finishing touches though they may be, they're also rather large ones. This is where the rubber meets the road—where VNgen transitions from being a prototype to an actual development tool.  
  

## Silence is (not so) Golden

As previously mentioned, the big focus for these past two weeks was getting audio implemented. Now, VNgen being based in GameMaker Studio, there are already plenty of audio functions​ to work with, but integrating them into VNgen's event/action system proved to be a bigger undertaking than expected. Certain built-in functions like volume transitions are mostly useless when they don't respect engine pauses or offer any way of direct access to their underlying data. As a result, many existing functions had to be re-implemented to integrate audio into the engine more fully... while also working with existing GameMaker functions on the backend.  
  
That latter reality has been a source of numerous head-scratchers where things that _appear_ like they should work just don't for one reason or another. And without direct access to debug everything that's going on, identifying these creases in the works and ironing them out is easier said than done. But despite the somewhat convoluted nature of piggy-backing systems on top of each other, this new approach opens up enough opportunities to pay for its inconveniences.  
  
The end goal is, of course, for audio functions to work like you'd expect: which is, like every other VNgen function. Each sound has its own create, destroy, and modify script, each accepting a familiar set of customizable parameters including transition durations and ease modes (the same used in visual animations!). But on top of this, VNgen is able to support three distinct types of audio each with its own purpose tailored specifically to visual novels: sound effects, voice lines, and music. Of particular interest are voice lines and music, since only voice lines can be added to the backlog and only music supports real-time clipping. Music loops by default, and clipping can be used to set the loop region of the song in real-time. It is also possible to play a song from the beginning before looping, and then modify the loop region later to allow the song to continue playing to the end. In this way, a single asset can become highly dynamic and match the pace of the player seamlessly.  
  
Though often underappreciated, the importance of audio in media of all types really can't be understated. As such, even as audio is _mostly_ complete and I will soon move on to text and branches as planned, I will also continue work on improving audio functions and adding as many useful features as possible. In particular, the addition of audio has made certain weaknesses apparent in how the backlog handles logged audio playback, among other things. Lots of notes are being made, and all will be checked off the list before the big Version 1.0 is released.  
  
For now, thanks as always for reading, and stay tuned for next time!
