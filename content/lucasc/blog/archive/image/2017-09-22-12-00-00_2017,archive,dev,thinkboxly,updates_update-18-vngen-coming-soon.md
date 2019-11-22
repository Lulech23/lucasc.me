<!--t Update 18 - VNgen: Coming Soon! t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-18-vngen-coming-soon/update-banner-1-1024x512.jpg image-->
  
When you've spent enough time working on a project, it's funny how the end can sort of sneak up on you. No matter how long you've spent anticipating it, how many tears you've shed wishing it were here, when the time finally comes to set foot over the finish line, it sort of just... happens.  
  
"Oh, yeah. That was it." That was pretty much my response this past week when I checked the last feature off VNgen's to-do list. It was a feature I'd been dreading for a while—not because I was worried I couldn't do it, but because of the amount of unique code it required. Tedium, in other words.  
  
Well, now the boring slog is over, and one year later VNgen is officially feature-complete! There's still a handful of work to be done before it's ready to be called Version 1.0, but that day is coming up fast! As such, this weekend we'll not only be taking a look at the many changes and additions that have been made recently, but what you can expect for when and how VNgen will be unleashed upon the world. So what are you waiting for? Hit that "read more" button now!  
  

## Object-less Decisions

Though not all visual novels have them, for those that do, a robust choice system is imperative. It's a major part of your UI design and may comprise the entirety of your actual gameplay. As such, for VNgen I wanted to fundamentally improve the way options work over Edge VN. In that engine, all options actually did was create a new object. That object could be anything and could take any action as a result, but feedback on this node-like system was clear: users wanted the ability to take actions directly in the running object without the need to divide up their code.  
  
When I set out to make VNgen, I did so with one primary design principle in mind: "assume nothing." Assume nothing about the _way_ users use VNgen so that they can do _what_ they want with it. The new options system takes this approach more literally than any previous entity I've written, and in fact leaves taking action entirely up to the developer.  
  
Creating options in VNgen is a matter of running a script to create a new options menu, and then another script to create individual options. Many of the usual VNgen functions are there, so you can use transitions and ease modes for some quite interesting intros and outros. After that, the player makes a choice, and... well, as far as VNgen is concerned, its job is done. The resulting choice is stored in memory and can be retrieved in "if" or "switch" statements to do whatever you want with it. A slightly opaque solution compared to Edge VN, perhaps, but infinitely more flexible. In fact, VNgen options don't _have_ to be used for in-game choices at all—you can create your main menus with them too!  
  

<iframe src="https://gfycat.com/ifr/AgitatedCourageousConure" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  

## Polished to Shine—Literally

It came together so well, in fact, that when all was said and done I still had a couple days left to spruce up and polish both the back-end and front-end user experience. There's still plenty to be done, but any head start is a bonus.  
  
First, reorganization. Despite its digital nature, code grows quite organically and that means with time comes clutter. Think of it like a city that builds up over decades or even centuries: the layout can become such a mess that even GPSes struggle to navigate them. Fortunately, it's much easier to reorganize code after the fact.  
  
The most significant of these improvements comes in the form of vngen\_pragma, a self-executing script that initializes all necessary engine code at runtime with zero action required by the user. By moving most init functions into this new script, Edge VN's tradition of manually declaring which object to initialize first is a thing of the past. Over the coming weeks, it may be possible to use similar techniques to optimize other shared information as well. The more tasks VNgen can automate while not sacrificing freedom, the better.  
  
Second, I discovered that with the way VNgen handles link markup I already had all the necessary information to add a subtle hover effect. Because text already exists as a texture and links already store their physical coordinates, it's quite simple to draw a portion of the same texture on top of itself and use additive blending to highlight the link text. Since this is a _highlight_ the effect doesn't show up on white text, but for those to whom it applies, it's a nice touch that comes basically for free. And in my opinion, it makes a surprisingly big difference in how clicking links feels.  
  

<iframe src="https://gfycat.com/ifr/IncompleteIllfatedAlleycat" frameborder="0" scrolling="no" allowfullscreen width="354" height="110"></iframe>

  

## Your Console is my Command

Next, with all the pieces of the engine in place, I could finally focus on finishing something that's been in-progress for quite a while now: the debug interface. You may have seen it pop up in screenshots and Gfycats in the past, and last time I even drew a bit of attention to it with the addition of more detailed camera stats.  
  
However, up until now the debug interface has been operating as more of a hack than anything. There was no point in writing it properly until I had a structure to build upon. As such, it was quite satisfying to finally change this and rework the entire thing from the ground up.  
  
[![](/content/images/update-18-vngen-coming-soon/2017-09-22-1024x576.png)](/content/images/update-18-vngen-coming-soon/2017-09-22-1024x576.png)  
  
As you can see in the screenshot above, engine stats have been divided by category and displayed on opposite sides of the screen so that lower-res screens can see all available information. Camera stats are now even more detailed, with complete coordinates and perspective info.  
  
Most importantly, there is now an actual command console which can be summoned anytime with the tilde (~) key (provided debug mode is enabled). At present only a handful of commands are supported which allow enabling and disabling various debug stats, jumping to different VNgen events or game rooms, and so forth, but with time the sky's the limit. In the future, it may even be possible to edit your script in real-time!  
  

## Going Gold

And speaking of the future, with all these features in place, VNgen's release is not far off. As previously mentioned, options were the last feature needed for the engine to be considered feature-complete. That doesn't mean it's ready to release just yet, but it _is_ fully functional and almost entirely bug-free.  
  
So here's how the VNgen launch is going to work: for the next couple of weeks, my focus will be on updating the backlog to support all the latest functions, optimize engine performance, and spit-shine the code in every way I can think of.  
  
After that, in late October VNgen will enter Early Access and be available for purchase as-is at a discount (TBD) on the GameMaker Marketplace. This version of VNgen will be production-ready, but lacking documentation and native compatibility with GameMaker Studio 2. These features and any necessary improvements reported by users will arrive over the following two-to-three weeks as a free update, at which point the Early Access period will be over.  
  
I'm very excited to get VNgen in as many hands as possible and see what the world creates with it! Precise dates and dollars will be announced soon, so stay tuned!  
  
And with that, I leave you with this week's Yugure no Kagami status report. Until next time!  
  

## Yugure no Kagami Status Report

table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

100%

**Programming:**

60%

**Voice:**

0%
