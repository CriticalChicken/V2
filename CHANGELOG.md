# V2.1 Charismatic Cockatiel - changelog

## V2.1.0 (so far)

- **New feature:** Added comments to post pages
  - Implemented GDPR-compliant [Friendly Captcha](https://friendlycaptcha.com) to reduce spam whilst staying as un-Googled as possible
  - Distinguished staff members&rsquo; comments with an X-inspired &ldquo;green tick&rdquo;
- **New feature:** Added ChickenFeed hub to homepage
  - Added faux gaming &ldquo;stock markets&rdquo; to prominently feature topics we&rsquo;re happy, angry, or ambivalent about
    - Made markets fully editable through the V2 menu in the WordPress Dashboard
  - Added &ldquo;We did the math(s)&rdquo; section with a variety of offbeat gaming statistics
  - Added scheduled, weekly opinion polls and a new poll archive page
- **New feature:** Added announcements box to the WordPress Dashboard showing news ticker information, maintenance mode status, and announcements for staff members
  - Made announcements box fully editable through the V2 menu in the WordPress Dashboard
- **New feature:** Added custom V2 menu to the WordPress Dashboard to consolidate existing &ldquo;V2 settings&rdquo;, and menu items for frequently-used tasks, into one place
- **Improvement:** Refreshed and refined design of entire website
  - Rewrote almost all code to make it more efficient and more accessible
  - Redesigned titleTags to make them more visually distinct from each other
    - Made titleTags slightly larger on homepage and listing pages, for easier tapping on mobile devices
    - Added titleTags for Pok&eacute;mon and Dungeons&nbsp;&amp;&nbsp;Dragons sections
  - Added mouseover animations to all clickable elements, including &ldquo;glass&rdquo; overlays on post thumbnails
  - Vastly improved listing pages with shorter line length and more obvious visual distinction between posts
    - Used [BalanceText](https://github.com/adobe/balance-text) to evenly distribute long headlines on the page
    - Added new sidebar featuring randomly-selected posts from the &ldquo;Best of&rdquo; section, links to related sections, and latest comments
    - Redesigned headers on topic, writer, and search results pages
    - Implemented Google-inspired pagination with clickable page numbers
    - Redesigned placeholder/fallback thumbnails
    - Added Easter egg
  - Added Ko-fi fundraising section to homepage, to spotlight the fact we&rsquo;re &ldquo;ad-free, tracker-free, AI-free, and 100% independent&rdquo;
  - Added full-screen search modal for a more intuitive search experience
  - Completely redesigned Tidbyt applet to bring it in line with new design language
    - Added excerpts to Tidbyt applet
  - Replaced Miis on the About page and writer pages with their [Gravatars](https://en.gravatar.com)
  - Redesigned Radar page and added new shortcode-based &ldquo;tags&rdquo; to show expected release dates, consoles/platforms, and other relevant information
- **Improvement:** Improved design of menu bar
  - Added a prominent &ldquo;home&rdquo; button for unambiguous navigation
  - Added menu bar to the bottom of every page, above the footer, to reduce to need for scrolling
  - Added an optional &ldquo;Special menu item&rdquo;, editable through the V2 menu in the WordPress Dashboard, e.g. for expo coverage
- **Improvement:** Migrated from Select Contextual Related Posts plugin to YARPP to improve recommendations
- **Improvement:** Changed WordPress&rsquo;s taxonomies in line with our in-house style: `category` to `section`, `tag` to `topic`, and `author` to `writer`
  - Added permanent redirects for the old-style links
- **Improvement:** Added ChickenDefender function to automatically, permanently redirect &ldquo;overlapping&rdquo; taxonomies &ndash; e.g. the &ldquo;Ace&nbsp;Attorney (series)&rdquo; topic now redirects to the main Ace&nbsp;Attorney section
- **Privacy and security:** Prevented Google from serving [Amp](https://en.wikipedia.org/wiki/Accelerated_Mobile_Pages) versions of our pages
- **Privacy and security:** Added minimum password strength requirements for new and existing writers

## See what changed in previous versions

- [V2.0 Brazen Blackbird](https://github.com/CriticalChicken/V2/tree/V2.0-Brazen-Blackbird)
