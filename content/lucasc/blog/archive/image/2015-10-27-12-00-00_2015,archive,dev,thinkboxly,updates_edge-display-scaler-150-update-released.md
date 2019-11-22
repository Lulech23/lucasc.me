<!--t Edge Display Scaler 1.5.0 Update Released! t-->
<!--tag 2015,archive,dev,thinkboxly,updates tag-->
<!--image /content/images/edge-display-scaler-150-update-released/EdgeEngineLogo-1-1024x512.png image-->
  
Another week, another Edge Engine update! Following the major rewrite of Edge DS 1.4.0, 1.5.0 smooths out a lot of rough edges of both the performance, cosmetic, and functional variety.  
  
New in this version is the ability to set minimum resolutions on all edgeds\_set\_\* scripts, which also provided incentive to further unify script syntax. All edgeds\_set\_\* scripts now follow the exact same syntax regardless of their unique functionality, making it easy to use and switch between different scaling modes.  
  
Due to some user confusion on how and when DPI mode works in Edge DS, the built-in stats view now features a DPI adjustment warning when DPI mode is in-use. DPI mode is also now disabled by default--an 'opt in' feature rather than 'opt out'.  
  
And speaking of things being 'out', Edge DS just got that much cleaner: the edgeds\_get\_prevscale script has been merged with edgeds\_set\_\* scripts and is no longer necessary; therefore it has been removed from the package entirely. No more 'End Step' event!  
  
Numerous other fixes and improvements are present in the update as well, so as always I highly recommend heading over to [the Marketplace](https://marketplace.yoyogames.com/assets/1257/display-scaler-edge-engine) to pick up the latest version or downloading the update directly from your asset library!
