<!--t Update 21 - VNgen Early Access: Available NOW t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-21-vngen-early-access-available/update-banner-1024x512.jpg image-->
  
You read that title correctly: after many missed estimates, VNgen is finally here, it's real, and it's out in the wild. It's been a long time in coming, but I promise the extra time has been put to good use. When I first sat down to write the design document for what would become VNgen, I feared I was being too ambitious. A year later, not only have I achieved the goals of that original design document, but also surpassed them in almost every way and even added at least a dozen more features to boot (not counting additions planned for further down the road). What's more, the core logic that VNgen is built on proved so useful that it has since been spun off into its own library, Quantum, which will go on to power further tools in the future.  
  
It's been a truly productive year, but the release of VNgen doesn't mean it's all coming to an end. On the contrary, this is quite literally just the beginning.  
  

<iframe width="640" height="360" src="https://www.youtube.com/embed/G-Z2zBhZBOI?rel=0" frameborder="0" allowfullscreen></iframe>

  

## Developers, start your engines!

[VNgen is available now in Early Access on the GameMaker Marketplace](https://marketplace.yoyogames.com/assets/6083/vngen-visual-novel-engine), with documentation and other info [coming to X1](https://xga.one/assets/vngen/?section=welcome-to-vngen) over the following weeks.  
  
As promised, that comes with an introductory 30% discount to give existing Edge VN users a chance to upgrade. This EA edition is feature-complete and production-ready, and will upgrade to version 1.0 for free when it hits.  
  
**So, why Early Access?** Simply put, while everything works and runs well even on low-end hardware, there's still plenty of optimization to be done before VNgen's code can be considered final. These are all internal changes, so compatibility between EA and 1.0 won't be affected, but they're important changes nonetheless.  
  
Part of what makes them so important is the relationship between VNgen and GameMaker Studio versions 1 and 2. GMS 2 has been out of beta for almost a year now and has built up a solid user base for itself, while support for GMS 1 will steadily decline over the next couple of years. VNgen was started in GMS 1 and has remained there until this day, but clearly GMS 2 is the way forward. One purchase of VNgen will give you a license for both versions, but during the Early Access period only the GMS 1 build will be available. Before I can move on to porting VNgen to GMS 2, I have to make sure the GMS 1 version is the best it can possibly be.  
  

## Taking a pit stop...

And speaking of which, VNgen didn't just casually step across the finish line! These past two weeks were a series of strides for the engine to reach its current state, which are well worth reviewing.  
  
First, one problem that has plagued VNgen for a while now is the 16 argument limit imposed by GameMaker on scripts. This means each individual VNgen function can only have up to 16 values input by the user, and the rest has to be determined automatically. Most functions don't come anywhere close to exceeding this limit, but text is an exception for one reason: multi-language support. That one extra option pushed text create and replace operations over the limit, meaning something had to be cut somewhere. That 'something' has changed repeatedly over time, but at last I've found a suitable compromise that doesn't eliminate anything: now, speaking characters can be declared in text markup.  
  
Not only does this solution get around the 16 argument limit, but it makes things a bit more convenient for advanced users—who are the only ones affected anyway. Last time, I wrote a bit about simple scripts and how they condense longer functions into shorter versions that don't require input for many less important settings. Well, the simple versions of text scripts still offer separate name and text arguments for clarity, meaning the addition of name markup is just another tool in the belt of any experienced VNgen user.  
  
However, the biggest addition was that of the backlog. Now, if you've been following this site since it pivoted into a devblog, you may recall that I already wrote about a backlog in the early days. What gives, right? Well, as the first thing to be written for VNgen, the original backlog was in many ways an exploration of the concepts going into VNgen's core design. As you can imagine, things changed quite a bit since then, and I knew I could do better.  
  
If you think that rewriting a scrolling list of text is a simple task, think again. Edge VN took a fairly simplistic approach to its backlog and proved the challenges of writing a _good_ backlog in the process. It was very limited in how much data it could handle and had a very significant impact on performance, not to mention it failed to preserve any color and font data from the original strings being logged. VNgen's backlog needed to correct all of this AND handle scrolling through events which might have multiple strings to show simultaneously.  
  
It was slow going at first, but like everything else I'm happy to say my goals have been achieved.  
  

<iframe src="https://gfycat.com/ifr/ReasonableWaryGangesdolphin" frameborder="0" scrolling="no" width="100%" height="100%" style="position:absolute;top:0;left:0;" allowfullscreen></iframe>

  
VNgen's backlog handles data much more intelligently than Edge VN, making it suitable for large histories of text and audio with only a fraction of the performance impact incurred by Edge VN. And yes, all text style modifications can be preserved and displayed in the backlog exactly as they originally appeared.  
  
Interestingly enough, the solution ultimately lay in going back to VNgen's core mechanic of assigning IDs to code itself. By implementing this and other standards developed long ago, what began as a puzzling challenge suddenly started fitting together nicely. By far the hardest part was simply supporting mouse, touch, and keyboard/gamepad scrolling all at once. Touch scrolling is more or less a matter of adjusting the Y axis with some simulated friction and momentum, but the position of the backlog on-screen is only half the overall problem. The engine also needs to know which specific entry the user is currently looking at in order to focus it with keyboard navigation and allow playback of any related logged audio, such as voices. And since VNgen allows multiple simultaneous speakers in a single event, it's not enough to assume the first thing on the screen is what the user is actually looking at. Add enough text, and a single event may span _multiple_ screens! But by addressing the entire framework of data as a single structure with a single set of IDs, suddenly things "just work", which brought VNgen to completion just in time to close out the month.  
  

## The next lap

And what a month it's been! Or rather, was. October is already over (hard as it is to believe), and that means there's no time for slowing down now. The next two months will be critical for shaping 2018 into my biggest year yet, as I shift focus onto bringing VNgen out of Early Access and also beginning to work in earnest on developing a little project you may have heard about...  
  
Speaking of which, I leave you this weekend with your regularly-scheduled Yugure no Kagami status report:  
  

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
