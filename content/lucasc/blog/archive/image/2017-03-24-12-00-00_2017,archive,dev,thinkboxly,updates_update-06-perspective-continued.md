<!--t Update 06 - Perspective Continued t-->
<!--tag 2017,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-06-perspective-continued/update-banner-1-1024x512.jpg image-->
  
Well, there's only one week left in March, and all told I've done...about half of what I hoped to. It's been one of those months: setbacks, diversions, and unforeseen complications. However, while this may be the last update before April, the foundations I've laid might just cause the end of March to be the most productive days of the month.  
  

## Collaboration

It's frequently discussed how modern occupations can often be lonely business. People work in isolated conditions for long stretches at a time to accomplish a variety of tasks. On the flip side, this means working together has become more important than ever. And for entrepreneurs in particular, making good connections is vital for growing your place in the industry.  
  
This past week I had the opportunity to do both—which itself has been a long time coming. A few months ago, my friend and fellow author [Kate Emmons](http://kaemmons.com/) enlisted my help to create a website for herself and her debut novel releasing later this year. No spoilers of course, but having read the first draft myself I was eager to lend my support to the project and now that website is nearly complete.  
  
[![](/content/images/update-06-perspective-continued/preview.jpg)](/content/images/update-06-perspective-continued/preview.jpg)  
  
You can check it out at [www.kaemmons.com](http://kaemmons.com/)—and I highly recommend you do! However, it's not quite live yet. But keep your eyes peeled, because this is one YA fiction series you won't want to miss. I can vouch for that personally, and I'm very grateful I had the opportunity to be a part of its marketing and development.  
  

## Continuation

Between site work and real life distractions, not much programming has happened around here as of late, but what I have managed to do is significant for last week's topic—perspective—which will now remain a prominent theme again for at least one update more.  
  
As I mentioned previously, adding full perspective support is one of the more mathematically challenging aspects of VNgen, but progress is being made: I now have working formulas for handling translation, and rotation, while still incomplete, is beginning to behave as desired. The goal is to rotate all VNgen elements while maintaining their positions relative to the screen and each other. Witness for yourself:  
  

<iframe src="https://gfycat.com/ifr/BountifulPleasingBallpython" frameborder="0" scrolling="no" width="640" height="360" allowfullscreen></iframe>

  
  
Again, at present all VNgen entities are forced to align by the top-left corner, so coming up with a concise and efficient solution for rotating around a _different_ point's center is tricky indeed, considering the amount of calculations already being performed. And to that end, there's still much to be done in terms of optimizations and cleaning up code. What you see above works, but only takes a fraction of possible conditions into account, so there's still much work to be done before perspective can be considered complete. However, I feel the effort and prolonged development is worth it for what the feature offers to visual novel developers. Perspective can be either a subtle addition or a fundamental design principle depending on how it is used, and I believe it will breathe life into visual novels like we've rarely seen before. There's currently no other consumer-level engine with a feature like it built right in, and I would consider it a privilege for VNgen to become the first.  
  
But I'm getting a bit ahead of myself. It is now officially spring, and there's plenty left to do on my VNgen design document. I have made it my goal for the engine to be complete this season and that is still perfectly possible. However, the most important features are yet to come.  
  
Thanks as always for reading, and stay tuned for next time!
