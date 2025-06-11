![A blackbird perched on top of a tree stump, next to the V2 logo](https://github.com/CriticalChicken/V2/assets/35422415/93f2349f-1da0-4701-a101-865d0de56488)

# V2.0 Brazen Blackbird
The new WordPress theme for [CriticalChicken.com](https://www.criticalchicken.com).

> [!IMPORTANT]
> Copyright &copy; Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
>
> All other trademarks referred to are trademarks of their respective owners. See [website](https://www.criticalchicken.com) for current copyright years.

## Changelog

### V2.0.23

- **Improvement:** Made a bunch of changes to the Gaymers+ Webring page, and trimmed some more dead wood

### V2.0.22

I can&rsquo;t believe this is still going.

- **New feature:** Added a new page for the [Gaymers+ Webring](https://www.criticalchicken.com/webring), and added the Webring widget to the site footer
- Removed the Radar page and references to the now-dead Tidbyt project

### V2.0.20&ndash;V2.0.21

- **Bug fixes and minor improvements**

### V2.0.19

- Removed &ldquo;Contextual Related Posts&rdquo; plugin from single post pages, because it is *hopeless.* This will be migrated to YARPP in V2.1. This is probably the last change for a while, as long as we don&rsquo;t find any more bugs

### V2.0.18

- **SEO:** Fixed a major issue/oversight with our XML sitemap that was preventing most of our posts from appearing on it
  - Backported the ChickenDefender function from V2.1 to automatically, permanently redirect &ldquo;overlapping&rdquo; taxonomies &ndash; e.g. the &ldquo;Ace Attorney (series)&rdquo; topic now redirects to the main Ace Attorney section

### V2.0.17

- **Improvement:** Centred the logo at the top of the page on small mobile devices
- **Bug fix:** Corrected spacing/line breaks between topics on single post pages
  - Added a script to remove the serial comma when there are only two topics (so it says &ldquo;A and B&rdquo; instead of &ldquo;A, and B&rdquo;)
- **Third-party:** Updated [bsky-embed](https://github.com/Vincenius/bsky-embed) to v0.1.0

### V2.0.16

- Development on V2.1 has stalled somewhat, so we&rsquo;re making a few small improvements to V2.0 in the meantime. You should expect V2.1 to launch in the latter half of this year
- **Improvement:** Replaced [Mastofeed](https://github.com/fenwick67/mastofeed) with [bsky-embed](https://github.com/Vincenius/bsky-embed) on the homepage, and changed all prominent Mastodon references to Bluesky ones
  - The plan going forward is to turn our [Mastodon feed](https://mastodon.world/@CriticalChicken) into an automated feed of our latest posts, and use our [Bluesky feed](https://bsky.app/profile/criticalchicken.com) to do all our actual &ldquo;socialising&rdquo;
  - Removed all references to Threads, as we&rsquo;re no longer throwing our weight behind the Fediverse
- **Bug fix:** The mobile search box no longer stays open after the main menu is closed on small mobile devices

### V2.0.12&ndash;V2.0.15

- **Bug fixes**

### V2.0.11

- **Bug fix:** Corrected amount of spacing beneath related posts section

### V2.0.10

- **Improvement:** Added line breakpoints to &ldquo;#ForTheGaymers&rdquo; wherever it appears as a title, so it doesn&rsquo;t overflow the screen width on mobile devices
- **Bug fix:** Fixed Mii images on the [About](https://www.criticalchicken.com/about) page, which were not displaying at the correct (smaller) size on mobile devices

### V2.0.9

- **Improvement:** Added custom &ldquo;&num;&rdquo; symbol to V2 font and applied it to all instances of &ldquo;#ForTheGaymers&rdquo; site-wide

### V2.0.8

- **Improvement:** Tweaked design and wording of Tidbyt page
- **Improvement:** Replaced ticker bullets with a webfont instead of an image, so it no longer flickers/judders when scrolling

### V2.0.7

- **New feature:** Added page to promote our new [Tidbyt applet](https://github.com/tidbyt/community/pull/1731)
- **Improvement:** Added new #ForTheGaymers logo to its [category page](https://www.criticalchicken.com/category/forthegaymers)
- **Bug fix:** Corrected size of logo&rsquo;s margin on small mobile devices
- **Bug fix:** Fixed category page titles which weren&rsquo;t displaying properly on small mobile devices

### V2.0.6

- **Improvement:** Added stacked and combined logo variants for smaller devices (so #ForTheGaymers branding can always be seen)

### V2.0.5

- **Improvement:** Added Boosts to Mastofeed for greater variety of content

### V2.0.4

- **Improvement:** Replaced #ForTheGaymers logo with a new design
- **Bug fix:** Fixed listing pages&rsquo; broken layout on tablets

### V2.0.3

- **Bug fix:** Replaced old/outdated Microanalytics code

### V2.0.2

- **SEO:** Fixed non-descriptive Jumbotron link

### V2.0.1

- **Bug fix:** Fixed `box-shadow` appearing &ldquo;cut off&rdquo; on mobile menu&rsquo;s social links
- **Bug fix:** Fixed script that adds &ldquo;and&rdquo; before last tag on a single post, so it only works on posts with more than one tag
- **Accessibility:** Added `lang` attribute to opening `html` tags

## Credits

- [bsky-embed](https://github.com/Vincenius/bsky-embed) by [Vincent Will](https://github.com/Vincenius)
- &ldquo;Line&rdquo; icons by [Gregor Cresnar](https://iconix.si), licensed through [Noun Project](https://thenounproject.com/grega.cresnar)
- [momentum.js](https://github.com/sschoepke/momentum) by [Stephen Schoepke](https://github.com/sschoepke)
- [Reset CSS](https://meyerweb.com/eric/tools/css/reset/index.html) by [Eric A. Meyer](https://meyerweb.com/eric)
- [Web-Ticker](https://github.com/mazedigital/Web-Ticker) by [Maze Digital](https://github.com/mazedigital)
