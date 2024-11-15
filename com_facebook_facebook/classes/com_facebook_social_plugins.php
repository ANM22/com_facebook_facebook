<?php

/**
 * Facebook social plugin for ANM22 WebBase CMS
 * 
 * @author Andrea Menghi <andrea.menghi@anm22.it>
 */
class com_facebook_social_plugins extends com_anm22_wb_editor_page_element
{
    var $elementClass = "com_facebook_social_plugins";
    var $elementPlugin = "com_facebook_facebook";

    var $elementClassName = "Facebook";
    var $elementClassIcon = "images/plugin_icons/com_facebook.png";

    var $pageSrc = "https://www.facebook.com/anm22.it";
    var $plugWidth;
    var $plugHeight;
    var $plugColorScheme = "light";
    var $plugShowFriendsFaces = 1;
    var $plugShowHeader = 1;
    var $plugShowPosts = 0;
    var $plugShowBorder = 1;

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
        $this->plugWidth = $xml->plugWidth;
        $this->plugHeight = $xml->plugHeight;
        $this->plugColorScheme = $xml->plugColorScheme;
        $this->plugShowFriendsFaces = intval($xml->plugShowFriendsFaces);
        $this->plugShowHeader = intval($xml->plugShowHeader);
        $this->plugShowPosts = intval($xml->plugShowPosts);
        $this->plugShowBorder = intval($xml->plugShowBorder);
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
        $this->plugWidth = $data['plugWidth'];
        $this->plugHeight = $data['plugHeight'];
        $this->plugColorScheme = $data['plugColorScheme'];
        $this->plugShowFriendsFaces = intval($data['plugShowFriendsFaces']);
        $this->plugShowHeader = intval($data['plugShowHeader']);
        $this->plugShowPosts = intval($data['plugShowPosts']);
        $this->plugShowBorder = intval($data['plugShowBorder']);
    }

    /**
     * Render the page element
     * 
     * @return void
     */
    public function show()
    {
        if ((!$this->pageSrc) or ($this->pageSrc == "")) {
            $this->pageSrc = "https://www.facebook.com/anm22.it";
        }
        if ($this->plugShowBorder) {
            $showBorder = "true";
        } else {
            $showBorder = "false";
        }
        if ($this->plugShowHeader) {
            $showHeader = "true";
        } else {
            $showHeader = "false";
        }
        if ($this->plugShowPosts) {
            $showPosts = "true";
        } else {
            $showPosts = "false";
        }
        if ($this->plugShowFriendsFaces) {
            $showFriendsFaces = "true";
        } else {
            $showFriendsFaces = "false";
        }
        if (($this->plugHeight) and ($this->plugHeight != "")) {
            $heightI = "=" . $this->plugHeight;
            $heightCSS = "height:" . $this->plugHeight . ";";
        } else {
            $heightI = "=290px";
            $heightCSS = "height:290px;";
        }
        if (($this->plugWidth) and ($this->plugWidth != "")) {
            $widthI = "=" . $this->plugWidth;
            $widthCSS = "width:" . $this->plugWidth . ";";
        } else {
            $widthI = "";
            $widthCSS = "";
        }
        ?>
        <div class="<?= $this->elementPlugin ?>_<?= $this->elementClass ?>">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=<?= urlencode($this->pageSrc) ?>&amp;width&amp;height&amp;colorscheme=<?= $this->plugColorScheme ?>&amp;show_faces=<?= $showFriendsFaces ?>&amp;header=<?= $showHeader ?>&amp;stream=<?= $showPosts ?>&amp;show_border=<?= $showBorder ?>" scrolling="no" frameborder="0" style="border:none; background:#FFF; overflow:hidden;<?= $widthCSS ?><?= $heightCSS ?>" allowTransparency="true"></iframe>
        </div>
        <?
    }
}
