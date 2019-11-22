<!--t Update 15 - Announcing the Announcement t-->
<!--tag 2017,announcements,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-15-announcing-announcement/update-banner-1024x512.jpg image-->
  
If you've followed this dev blog for very long, you've probably seen a hint or two dropped that more has been going on behind the scenes than just VNgen. Well, the planets have aligned—literally—and that means it's finally time to take the wraps off the super-secret project I've been teasing all year.  
  
But don't worry! Work on VNgen continues, so as is custom around here, we'll also be spending time looking at how it has changed and evolved over the past couple weeks too.  
  
It's a bit of an unusual list this time around, so be sure to take a look after the jump!  
  
[![](/content/images/update-15-announcing-announcement/2017-08-11-1024x640.png)](/content/images/update-15-announcing-announcement/https://xgasoft.com/)  
  

## Total Eclipse

There are now fewer than 10 days until the US experiences its most complete solar eclipse in nearly a century. That might sound a bit random or even off-topic, but for me the timing couldn't be more perfect.  
  
A few weeks ago [I announced XGASOFT as the new brand](https://lucasc.me/post/update-12-introducing-xgasoft-and-x1) for my commercial efforts, and today I'm pleased to announce that on August 21 the official XGASOFT website will be unveiled, bringing with it the unveiling of the company's first major project—which just so happens to feature eclipses as a major theme. In fact, you can already visit [www.xgasoft.com](https://xgasoft.com/) and watch it getting closer!  
  
Social media profiles have been set up for XGASOFT at [Twitter](https://twitter.com/xgasoft), [Facebook](https://www.facebook.com/xgasoft/), and [Instagram](https://www.instagram.com/xgasoft/) as well, so please consider following to be the first to know when the announcements hit. I'll be back next time with actual coverage of the development process, but in the meantime it'd be a huge help to have any clicks you're willing to give.  
  
The clock is ticking, and I can't wait to share what's in store when it hits zero!  
  

## Quantum Leap

While we're on the topic of websites, if you've checked out the developer portal at X1 recently you might've noticed a new item on the main menu! That new item is Quantum, also called Q for short.  
  
[![](/content/images/update-15-announcing-announcement/q-logo-1024x512.png)](/content/images/update-15-announcing-announcement/https://xga.one/quantum/)  
  
Now, despite the new name, Q in itself has been around for almost an entire year. It is the foundation I originally designed for VNgen, now mature enough that I felt it was worth spinning off into its own product. Q is extremely custom, so it's not something I plan on releasing individually, but this step is still important for two main reasons: 1) the work going into VNgen can easily be paid forward to future developer assets, and 2) those assets will all function in a familiar way, speeding up development and reducing the learning curve to using them.  
  
With GameMaker Studio 2 out and growing its userbase rapidly, I frequently receive questions about when my existing assets will be made officially compatible with the new IDE. Well, the answer is that I intend to do _much_ better than mere compatibility: the long-term goal is to remake everything from the ground up with Q as the foundation. The potential benefits of this approach are huge, and I've taken the time to outline some of them [on the X1 product page](https://xga.one/quantum/), so please take a look! I hope you'll be convinced as I am that it's worth the wait rebuilding everything this way.  
  

## Event Horizon

With most work these past two weeks being directed at preparing for the 21st, VNgen took a bit more of a backseat in development than usual, however a few important changes still managed to be completed.  
  
The biggest from a technical perspective is that the _vngen\_goto_ function has been updated to jump to any event and object in a single frame, meaning you can take your players from one dialog to any other dialog in your entire game _instantaneously_. This was always the plan, but until all the main VNgen elements were in place it was impossible to achieve—and very nearly seemed impossible even still.  
  
Because of the way certain VNgen actions persist into future events, the only way to jump from one event to a very different event is to perform the necessary calculations leading up to it. This means some backgrounds will need to be created and others removed from memory, characters will need to display different expressions, and so on—basically, there should be no difference between a scene arrived at linearly and a scene jumped to with vngen\_goto.  
  
Easier said than done, to be sure. While the code itself ended up being simple, determining how to implement it was one of the hardest logic exercises I've faced yet, and took me knee-deep back into code from VNgen's earliest days to get it working right. The end result was worth the effort though, as what I've effectively done is written a language feature absent from vanilla GML. It's in the function name, in fact: [GOTO](https://en.wikipedia.org/wiki/Goto). I've seen numerous requests for an official implementation of this command on Reddit and the GameMaker forums, with the response usually being that GML is mechanically incompatible with the idea. And it is—I haven't changed that, but I've gotten about as close as one could hope for. Even better, this is a feature that will be carried over into Q itself, so expect to see it again in the future!  
  

## Prompt Charm

Another benefit of the Quantum system is that it has become increasingly easy to build new categories and sub-categories of entities to accomplish tasks that were originally planned to be more bespoke.  
  
In previous posts, I've talked about how visual cues are important in distinguishing the speaking character(s), among other things. One of these visual cues traditional to visual novels is some sort of icon serving as an on-screen prompt to alert the player/reader when it's time to click for the next line of text. With the evolution of game design in general, these prompts have also evolved over the years with much more elaborate visuals and animations, to the point where in some cases they've become the anchor for the entire user interface.  
  
With VNgen, I've consistently gone out of my way not to limit anything to a particular function or use-case, and that has continued into prompts as well. Located as a sub-category of text element, prompts can be created, destroyed, modified, animated, and distorted just like everything else in the engine, and can even be set to display on a per-character basis so that each speaker gets their own unique visual cues.  
  
You can also set completely separate sprites for three prompt states: waiting for text to finish printing onto the screen, indicating that text is complete, and indicating when auto mode is active. Witness for yourself:  
  

<iframe src="https://gfycat.com/ifr/GiganticComfortableGerenuk" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  
The moral of this story is: test scenarios like what you see above have a way of growing increasingly trippy over time. Or you might just roll with the takeaway that you really can do just about anything with prompts in VNgen—whichever you prefer.  
  
At any rate, that about covers it for this weekend! Thanks as always for reading, and I'll see you next time... after the big reveal!
