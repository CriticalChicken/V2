# V2.1 Charismatic Cockatiel - changelog

## V2.1.0 (so far):

- **New feature:** ChickenFeed hub added to the homepage
  - *Faux* gaming stock markets section, to prominently feature topics we&rsquo;re happy, angry, or ambivalent about
    - Stock market content is fully editable through the WordPress admin panel
  - &ldquo;We did the math(s)&rdquo; section with a variety of offbeat gaming statistics
  - Weekly polls and a new poll archive page
- **Improvement:** Refreshed and refined design
  - Nearly all code has been rewritten to make it more efficient and more accessible
  - Redesigned, more visually-distinct titleTags
    - Made titleTags slightly larger on the homepage and listing pages, making them easier to click or tap
    - Added titleTags for **Pok&eacute;mon** and **Dungeons&nbsp;&amp;&nbsp;Dragons** sections
  - All clickable elements now have mouseover animations, including &ldquo;glass&rdquo; overlays on post thumbnails
  - Vastly improved (narrower) listing pages with obvious visual distinction between posts
    - Used [BalanceText](https://github.com/adobe/balance-text) to evenly distribute long headlines on the page
    - New sidebar featuring randomly-selected posts from the &ldquo;Best of&rdquo; section, and links to related sections
    - Enlarged titleTags are now used as headings on section pages, for improved visual consistency
    - Headers on topic, writer, and search results pages have also been redesigned
    - Redesigned, &ldquo;Google-style&rdquo; pagination with clickable page numbers
    - Easter egg
  - Prominent Ko-fi fundraising section added to homepage, to spotlight the fact we&rsquo;re &ldquo;ad-free, tracker-free, AI-free, and 100% independent&rdquo;
  - Full-screen search modal for a clearer, more focused search experience
  - Completely redesigned Tidbyt applet to bring it in line with our new design language
    - Tidbyt applet now shows excerpts as well as headlines
- **Improvement:** Redesigned menu bar
  - Menu bar now has a prominent &ldquo;home&rdquo; button for unambiguous navigation (the logo still links to the homepage, too)
  - Menu bar now appears at the top *and* bottom of every page, for easier navigation with less scrolling
  - &ldquo;Special menu item&rdquo;, editable through the WordPress admin panel, for temporary menu items e.g. links to expo coverage
- **Improvement/SEO:** Changed WordPress&rsquo;s `category` taxonomy to `section`, `tag` to `topic`, and `author` to `writer`, in line with our in-house style
  - Added permanent redirects for the old-style links
- **Improvement/SEO:** New `ChickenDefender` function automatically, permanently redirects &ldquo;overlapping&rdquo; taxonomies &ndash; e.g. the &ldquo;**Ace&nbsp;Attorney** (series)&rdquo; topic now redirects to the main **Ace&nbsp;Attorney** section
- **SEO:** Removed ability for users to edit their own profiles, to avoid the possibility of broken links (i.e. to writer pages)
- **Security:** Added minimum password strength requirements for new writers

## See what changed in previous versions:

- [V2.0 Brazen Blackbird](https://github.com/CriticalChicken/V2/tree/V2.0-Brazen-Blackbird)
