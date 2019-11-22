<!--t Update 23 - Extra! Extra! Read all about it! t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-23-extra-extra-read-all-about-it/update-banner-1024x512.jpg image-->
  
As a developer, sometimes you've gotta write code, and other times, you've gotta just write. For me, November was one of those months. With VNgen out in the wild, it is now my priority to support the Early Access release with information and updates that will lead it to version 1.0, and that means providing resources to help users learn how to use it. In the space of only a few weeks I wrote the amount of a small novel doing just that, and at last the effort has paid off.  
  
But don't take my word for it: this weekend you can finally see the results for yourself.  
  

## A long time coming

As a brand, XGASOFT is already almost a year old. Early on in 2017 I laid the groundwork for a long-term vision that might've been difficult to see from the outside, but with VNgen, hopefully that vision is starting to become a bit clearer.  
  
[![](/content/images/update-23-extra-extra-read-all-about-it/1e2c5d19-3a4b-4261-ace9-f4c8ce4b13f15B15D-1024x536.png)](/content/images/update-23-extra-extra-read-all-about-it/https://xga.one/vngen)  
  
On the developer side of things, X1 is now host to a massive library of VNgen documentation, which you can check out for yourself from start to finish at [https://xga.one/vngen](https://xga.one/vngen)\--and judging by site statistics, many of you already have. Page views in November were up nearly 100% over previous months, largely attributed to VNgen. As someone who learned to program by reading a manual, I know how important good documentation is, and it stung a little to watch early adopters trying to figure things out for themselves before documentation was complete. For everyone who stuck it out and supported me anyways, you have my deepest gratitude. From here on out, I hope VNgen's guides will prove helpful for anyone and everyone wanting to get started making great visual novel sequences in GameMaker Studio!  
  
If you're still on the fence about whether to give VNgen a try for yourself, the online manual is a great place to learn more about it and see if it's right for you. For those who've already made the jump, expect an offline copy to be included in the next update so you'll always have detailed guidance right at your fingertips!  
  

## Skipping ahead

And yes, with documentation finally complete, it's back to grindstone for my nose... in a good way! VNgen's to-do list is still extensive, and now that all key elements are there, most of what remains is the fun stuff (comparatively speaking, anyways). A few Early Access bugs still remain to be squashed as well, which I aim to do over the coming weeks. While these shouldn't affect stability in any way, fixing them will simply mean the best VNgen experience possible for both users and developers.  
  
One example of this is skip functionality, which is one of the hardest and most complex parts of the engine--and also one of the most important. Skipping is a crucial part of managing branching story paths and handling individual dialog choices, which make up most of the "gameplay" in many visual novels. As discussed in previous devblogs, VNgen achieves this using a feature similar to the "label" and "go-to" functions in other programming languages. Tricky thing is, GML doesn't _have_ these functions, and so I had to implement them myself--essentially adding on to GameMaker's programming language. Literally every event and action in VNgen had to be designed with this in mind from the ground up, and getting it right took several tries.  
  
Well, as they say, the third(-tieth) try is the charm, and with one final rewrite, VNgen skipping now works as intended. Whereas previously numeric event IDs and labels could not be used interchangeably as skip targets, now they can. Whereas previously typos could cause the engine to endlessly seek for an event that doesn't exist, the engine now fails gracefully and ends the skip process automatically. And most significantly, whereas previously large skips could take several frames to process, now _all_ skips occur in under a frame, no matter from where or to where in your visual novel that may be. To put this in perspective, a 60 FPS game must perform all of its calculations in under 16 milliseconds. With proper game design practices, on modern PC hardware that value should never be exceeded when skipping in VNgen.  
  
And this is just the start. I hope to push an update to VNgen including far more than just this one fix, so stay tuned! In the meantime, thanks as always for reading and for your support!  
  

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
