<!--t Simple Display Scaler now available from ThinkBoxly! t-->
<!--tag 2014,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/simple-display-scaler-now-available/sds_marketplace-1200x6751-1024x576.jpg image-->
  
At the beginning of the year it was announced that a new section would be opening on this site: ThinkBoxly Projects. While the first release ended up not being the planned vision for Projects (that version is still in the works), what the new page has accomplished is paving the way for ThinkBoxly to become more than just a tech blog, but a showcase for everything I do. Of course, the sort of projects originally on the page aren’t the extent of that vision either, but all that starts to change, now.  
  
That’s right, there’s a new project added to the roster of ThinkBoxly projects, and this time it is a completed product, published and ready for use. It also addresses a certain niche crowd I’ve been hoping to address around here for a while: programmers. In this case, specifically those programmers out there who use YoYoGames’s GameMaker: Studio IDE.  
  
Now, although I’ve been using GameMaker since version 5 (hi, Mark Overmars!), it’s only much more recently that I’ve delved into GML (that’s GameMaker Language) in earnest. In the blank space between those times I focused more on web design—HTML, CSS, and so forth. While I have found that knowing these languages makes it easier to pick up on programming languages, with GML and GameMaker: Studio in particular it also created a few holes where I wished GameMaker would behave like web design, but didn’t. The biggest of these was CSS’s @media function, which allows the user to specify a target resolution and design what a website looks like at that resolution in particular (so-called ‘responsive design’). Without this, my GameMaker projects were stuck at a fixed resolution with only stretching to compensate for differences between various displays. So I researched. While others have presented solutions, most required a cheap technique known as ‘room switching’ to effect changes in resolutions. That just wasn’t good enough for me, so I set out to make a display scaler of my own with a certain set of ideals in mind:  
  

- Absolute scaling. The scaler must maintain a 1:1 pixel ratio with the current display.Work in real-time.
- No room switching or other tricks. Just resize the window or rotate your mobile device, and it must immediately ‘just work’.
- Resource-efficient. FPS impact must be minimal.
- Simple. All code must be contained in one object, be human-readable, and avoid unnecessary complexity.
- Facilitate responsive design. Scaler must enable the programmer to build games that intelligently rearrange themselves based on the current display.
- No blur. Final result must be high-quality.

  
The result of this pursuit is what I call, plainly, Simple Display Scaler. It is a tool by a programmer for other programmers who want their games and applications built with GameMaker: Studio to resize in a window or run at a variety of resolutions across a range of PCs, mobile devices, and even game consoles. See it in action:  
  

<iframe width="640" height="360" src="https://www.youtube.com/embed/CP5hTbtc_m8?rel=0" frameborder="0" allowfullscreen></iframe>

  
  

## How do I use it?

  
True to its name, Simple Display Scaler requires only one object to function. This object is persistent and only needs to be included once at the beginning of a GameMaker project to achieve perfect scaling on all resolutions. The rest is up to the game designer. Included in Simple Display Scaler to help out are a few utility scripts as well as an interactive demo featuring easy-to-learn techniques. And of course, all code is fully notated and human-readable. Utility scripts cover:  
  

- Relative parent-child linking. Make objects both move independently and follow parent objects. If the parent is moved for the sake of display scaling, all children will follow.
- Automatic sprite scaling. If the display gets too cramped, the sprite will gracefully resize with it. On the other hand, it will never exceed its original size, so no stretching on large displays!
- Perfect backgrounds. Inspired by CSS cover, use backgrounds that will always fill the available screen space in the best possible way.

  
An in-depth ‘readme’ PDF is included for further details and example usage!  
  

## Cool! Where can I get it?

  
[Simple Display Scaler is available now on the GameMaker Marketplace for $1.99](https://marketplace.yoyogames.com/assets/1257/simple-display-scaler). Whether you’re just getting started with GameMaker programming or a veteran looking to conquer the resolution issue, Simple Display Scaler is a must-have asset for your programming arsenal! Compatible with ALL GameMaker export platforms!  
  
Thanks for supporting ThinkBoxly, and don’t worry, this kind of self-advertising won’t eclipse the usual content around here. Expect to return to more great tech news and reviews next week!
