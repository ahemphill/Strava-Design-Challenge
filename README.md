#Strava Design Challenge

##Prepared by Adam Hemphill for Chris Donahue and team &mdash; May 28, 2014

### Brief
>#### Design Challenge
>Imagine that Strava is planning on building a forum site. The site would function like a standard forum, similar to http://forum.slowtwitch.com/. For starters, it'd be available to logged-in users only. There would be some pre-built categories: one category for each Challenge, a category for Cycling Racing, Running Racing, Running Gear, and Cycling Gear. Within each category, users could: (a) create new post; see a list of posts, comment on a post, and kudo a post or a comment within a post.

>Please design and build an HTML prototype of the Strava Forum site. The data can be canned (please don't spend a bunch of time hooking up the prototype to a real database!), but the site should be interactive, and should show how users would perform the actions listed above. The site should feel like a Strava site, and should be responsive. Please provide some documentation that describes what design/implementation choices you made. Share with us the Github repository where the code resides, and provide a README for how to run the site.

>####What we are looking for:
>- clean, semantic HTML markup
>- excellent user experience in desktop, tablet, and mobile forms
>- elegant design


### Running the demo

#### Requirements
- Git
- PHP 5.4
- An internet-connected client which is logged in to Strava and supports sessionStorage, DOMContentLoaded and CSS3

#### Steps
1. In a shell, run:
```sh
git clone [git-repo-url] hemphill-strava-demo
cd hemphill-strava-demo
php -S localhost:1337
```

2. In your client, navigate to http://localhost:1337	