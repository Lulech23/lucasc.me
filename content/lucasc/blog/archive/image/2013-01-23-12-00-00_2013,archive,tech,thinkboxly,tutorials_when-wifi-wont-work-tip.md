<!--t When WiFi won’t Work (Tip) t-->
<!--tag 2013,archive,tech,thinkboxly,tutorials tag-->
<!--image /content/images/when-wifi-wont-work-tip/internet-problems-5B1-5D1.jpg image-->
  
So you check in to the hotel after a long day of travel, find your room, unpack your bags, and kick back on the bed with your laptop to catch up on the interwebs. Only problem is…all you get is a blank white screen. What’s going on? How can you get past the issue to start browsing? Turns out the answers are simpler than you might think. Today’s tip is quite basic, but it can be handy in a multitude of situations.  
  

## The Problem

  
So before we can address the fix, we have to know what’s going wrong, right? Well, if you ever find yourself on a public wifi service that fails to deliver more than a white screen, it is mostly likely because of the wireless host’s security. There are basically two ways to secure a wireless network: a password on the router itself, or some form of web-based security portal. Many hotels, cafés, restaurants, and colleges go with the second option because it affords greater control over clients connecting to the host network and is more difficult for black hats to hack through. However, it also requires that users be automatically taken to a certain web page to login or simply click their agreement to use the network wisely prior to accessing the world wide web. When the network fails to redirect your browser to this login page, you’re left with the infamous white screen. The network you’re on may appear to be unsecured, but a white screen is a sure indicator that there is some form of web security your browser must pass through before your computer is allowed access to its services. What gives?  
  

## The Fix

  
So how can we force the network we are connected to to behave even when we don’t have yet security clearance to use it? Simple.  
  
Type 1.1.1.1 into the address field of your browser and hit Enter. Login or agree to the network’s terms of use. Happy browsing!  
  

## Why does this work?

  
The sequence of numbers you see above is called a ‘dotted quad’. Dotted Quads consist of four numbers ranging from 0-255 separated by a decimal point. And more importantly for this discussion, they act like a street address for computers on a network. One quad identifies the entire network, and others identify each individual device connected to that network. So if these numbers are like street addresses, then think of 1.1.1.1 as the post office. In the case of web security, this number will always identify the computer your browser needs to connect to in order to be shown the login or accept-this-agreement screen.  
  
White screen = redirection failure. Entering 1.1.1.1 into your browser = manual redirection. It’s as simple as that, yet many are not aware of the trick.  
  
Of course, now YOU are, though!
