<?php

/**
 * Facebook link plugin for ANM22 WebBase CMS
 * 
 * @author Andrea Menghi <andrea.menghi@anm22.it>
 */
class com_facebook_facebook_link extends com_anm22_wb_editor_page_element
{
    var $elementClass = "com_facebook_facebook_link";
    var $elementPlugin = "com_facebook_facebook";

    var $elementClassName = "Link Facebook";
    var $elementClassIcon = "images/plugin_icons/com_facebook.png";

    var $pageSrc;

    /**
     * @deprecated since editor 3.0
     * 
     * Method to init the element.
     * 
     * @param SimpleXMLElement $xml Element data
     * @return void
     */
    public function importXMLdoJob($xml)
    {
        $this->pageSrc = $xml->pageSrc;
    }

    /**
     * Method to init the element.
     * 
     * @param mixed[] $data Element data
     * @return void
     */
    public function initData($data)
    {
        $this->pageSrc = $data['pageSrc'];
    }

    /**
     * Render the page element
     * 
     * @return void
     */
    function show()
    {
        ?>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-video" data-allowfullscreen="1" data-href="https://www.facebook.com/TheGamingBibleLB/videos/1137278712969436/">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/TheGamingBibleLB/videos/1137278712969436/">
                    <a href="https://www.facebook.com/TheGamingBibleLB/videos/1137278712969436/"></a>
                    <p>How to park in style...Sent in by RAZR</p>
                    Posted by <a href="https://www.facebook.com/TheGamingBibleLB/">The GAMING Bible</a> on Lunedì 2 novembre 2015
                </blockquote>
            </div>
        </div>
        <?
    }
}
