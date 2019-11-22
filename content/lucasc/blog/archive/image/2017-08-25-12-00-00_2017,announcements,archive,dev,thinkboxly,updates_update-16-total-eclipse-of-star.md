<!--t Update 16 - Total Eclipse of the Start t-->
<!--tag 2017,announcements,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/update-16-total-eclipse-of-star/2017-08-20-1024x567.png image-->
  
Well, the USA's first total solar eclipse in nearly 40 years has come and gone, and along with it my promise to formally announce the project I've been keeping under wraps for the past two-and-a-half years. Overall it was a successful day, with hundreds of visits and interactions on sites and social media pages literally no one had ever seen before. You can check them out [here (Twitter)](https://twitter.com/xgasoft), [here (Facebook)](https://www.facebook.com/xgasoft/), and [here (official site)](https://www.xgasoft.com/), by the way.  
  
Now, 'hundreds' isn't a very good number in the long term, but it's incredibly difficult to penetrate all the other voices on the internet. The initial task of raising awareness is a long and slow process, and often happens organically despite any efforts you may make. As an example, this site itself didn't receive much attention until I started operating as an indie developer, where traffic is now fueled largely by sites where I sell my work—and where I've done _next to zero marketing._  
  
Marketing can often seem an enigma, so perhaps as I work and learn I can one day share my experiences on this devblog. But! In the meantime, it's been an incredibly important past two weeks for me, and this intro has gone on long enough, so let's get started reviewing the highlights, shall we?  
  

## The Dawn of Dusk

First off, if you missed the announcements on eclipse day, XGASOFT.com is now live along with a teaser site and announcement trailer for the secret project, which you can watch below:  
  

<iframe width="560" height="315" src="https://www.youtube.com/embed/JI59OkOa-I8" frameborder="0" allowfullscreen></iframe>

  
The project's name is _Yugure no Kagami - The Mirror of Dusk_, and while it's still early days, putting the project out there now will allow me to openly discuss its development here in these biweekly dev blogs. Like so:  
  

## Yugure no Kagami status report:

table span { background-color: #06F; color: #FFF; padding: 5px 10px; display: inline-block; }  

**Script:**

100%

**Artwork:**

1%

**Music:**

40%

**Programming:**

60%

**Voice:**

0%

  
Not bad for a newly-announced project, right? Well, as nice as those numbers are now, they aren't likely to jump up too much for the rest of the year. The important thing is, 2017 has laid the foundation for 2018 in a big way, and by next year you should see every one of those categories hitting 100%.  
  
If you'd like to assist development and get the best deal on my developer assets available, please check out [XGASOFT's freshly-launched Patreon page!](https://www.patreon.com/xgasoft) I'm currently offering **the entire Edge Engine suite** to all tiers at or above $5, and tiers at or above $20 will also receive VNgen when it releases, with more assets to come to all tiers in the future. It's a bit of an experiment in offering a subscription package for unlimited updates and automatic access to new content as it arrives, plus it would really help me with funding my consumer projects so they can be the absolute best they can be. Your consideration is appreciated!  
  

[![](/content/images/update-16-total-eclipse-of-star/become_a_patron_button402x.png)](/content/images/update-16-total-eclipse-of-star/https://www.patreon.com/xgasoft)

  

## Back to Work

And speaking of VNgen, with the big reveal out of the way, development is once again full steam ahead and looking towards the finish line.  
  
On the 22nd I got warmed back up by tackling a list of known bugs that have accumulated over the months. Squashing these proved easier than expected, and paved the way for some user experience improvements as well. For example: previously, using the text\_replace function would erase any color, shadow, and outline modifications the user had applied to the text being replaced. While not a bug per se, this has now been fixed so that all style modifications persist through text replacement, meaning stylization only needs to be done once for entire scenes.  
  
At any rate, with the list of known bugs and issues cleared out, it was time to move forward. And to tell the truth, there's not much farther to go.  
  
At this stage, the to-do list for VNgen primarily consists of three line-items:  

- Text markup
- Dialog options
- The backlog

Now, if you've followed VNgen's development long enough, you may recall that a backlog already exists. However, VNgen has really evolved past compatibility with it and I'm personally not satisfied with its code, performance, and design. Certain bits and pieces will be retained, but overall we're talking rewrites, not updates.  
  
Future stuff, though. Taking the list above in order, this week's development focus has been on laying the foundation for text markup. Unlike Edge VN which preprocessed and cached text markup data, VNgen interprets markup in real-time. This is a vastly superior approach, but also more demanding of efficiency. At the same time, VNgen aims to be more flexible with its markup, allowing values of any length—and therefore requiring more advanced parsing.  
  
Thanks to VNgen's already-great text drawing capabilities, however, this has proven exceptionally easier to achieve than I anticipated. There's still some work to be done before the markup parser is completely standardized and bug-free, but early results show great promise.  
  
[![](/content/images/update-16-total-eclipse-of-star/2017-08-24-1024x575.png)](/content/images/update-16-total-eclipse-of-star/2017-08-24-1024x575.png)  
  
Something that has long been requested from Edge VN users is support for variable fonts. At the same time, some users reported the distortion-based bold and italics effects didn't work on their GPUs. Well, as seen in the screenshot above, VNgen kills both of those birds with one stone.  
  
Variable fonts are here, including native bold and italics. It's proving something of a challenge to perfectly adapt to the different dimensions different fonts and styles of fonts possess, but the systems are there to handle this—it's just a matter of correctly directing them _how_.  
  
My work is cut out for me, but I'm confident that next time we meet I'll have font markup and a host of other options to show off. Until then, thanks as always for reading!
