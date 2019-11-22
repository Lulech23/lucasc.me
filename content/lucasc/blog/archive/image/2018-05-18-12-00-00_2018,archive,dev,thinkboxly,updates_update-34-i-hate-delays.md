<!--t Update 34 - I Hate Delays t-->
<!--tag 2018,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-34-i-hate-delays/update-banner-1-1024x512.jpg image-->
  
I hate delays.  
  
I hate _my_ delays. If something else is delayed, I can wait. There's plenty to do in the meantime. But when I'm the one that has to make the call, it's a different issue.  
  
If you know me very well, you'll know I'm terrible at giving ETAs, which is why I hesitated to give one for VNgen until the very last. And to be fair, based on what I anticipated VNgen 1.0 to be at the time, it was a reasonable estimate. But the more I thought about it, the more I became convinced VNgen was missing something critical to the 1.0 experience, and so I'm going to have to ask everyone to wait just a bit longer.  
  
The good news? The wait will now be even more worth it.  
  
Today, May 18th, was originally supposed to be VNgen 1.0's release date. That's no longer going to happen. Instead, I'm pushing it back to **June 1st** (yes, still 2018).  
  
This I feel is a generous amount of time that will give me longer than necessary to make sure 1.0 is everything it needs to be. Not necessarily everything it _could_ be (I still have plans), but enough that anyone using it will have a complete development experience.  
  

## Down the Rabbit Hole

It all started with a feature request I received to add some animation capabilities to options menus. VNgen has secretly had such capabilities for a long time, but I struggled to think of a good way to actually implement them. After receiving this request, I decided to give it another look.  
  
By default, VNgen allocates a certain amount of memory for each new entity, divided like a spreadsheet to hold certain values in certain cells. For options menus, standard animations were not applicable by their very nature, so that left me with untapped data to be utilized in other ways. Looking over GameMaker Studio's built-in functions, I noticed an existing paradigm that fit the bill perfectly: transforms. Thus, existing vngen\_option\_create functions were spun off into vngen\_option\_create\_transformed functions which allow modifying scale and position on hover and select. And by repurposing a few things, it works.  
  

<iframe src="https://gfycat.com/ifr/LightScaredAfricanpiedkingfisher" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  

## Mission accomplished? Well, not quite.

As I've written before, VNgen thrives on standardization. Adding this new paradigm brought to light an inconsistency that has flown under the radar in VNgen for a while now, and that too needed to be addressed.  
  
VNgen has several modes of interactivity. There's the general "click to continue" action of course, then there's text links, options, and backlog navigation buttons. Each one of these inputs behaves differently and uses a different method for triggering output based on user input. That's bad. And worst of all, general purpose buttons were absent entirely, requiring extra GML for you to write your own.  
  
This I felt was an incredible oversight that needed to be corrected in time for 1.0. VNgen isn't meant to be a total UI engine (I have plans for that too), but it should at least be capable enough to handle its own needs and support creating basic menus for those without the skills to create their own.  
  
When 1.0 arrives, you can expect interactivity to be overhauled and much more consistent—and capable—than before.  
  

## But wait, there's more!

But that's not the only reason for VNgen's delay. In fact, even with all these changes and additions, VNgen _itself_ could have been ready in time for the original release date. But 1.0 is more than just a version number. On top of the usual extras (like updated documentation, for example), VNgen's first real release will include a brand-new developer demo and even a native GameMaker Studio 2 port. These things take time, and rather than rush out anything half-baked I believe it's important to take the time to do it right.  
  
On the bright side, this means you now have two more weeks to snag VNgen on either [Itch.io](https://xgasoft.itch.io/vngen) or the [GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine) with that **33% Early Access discount**!  
  
Once more, I leave you with your weekly Yugure no Kagami status report. Expect big things to develop in this space from here on out!  
  

## Yugure no Kagami Status Report

[What is Yugure no Kagami? Click here to learn more!](http://www.ynkgame.com/)table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

100%

**Programming:**

75%

**Voice:**

0%
