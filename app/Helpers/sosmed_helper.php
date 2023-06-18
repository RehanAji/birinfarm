<?php

function sosmed($params){

    extract($params);
    

    $sosmed = array(
        'blogger'           => array(
                                "url"       => 'https://www.blogger.com/blog-this.g?u=' . $url . '&n=' . $title . '&t=' . $desc,
                                "icon"      => "fab fa-blogger",
                                "title"     => "Membagikan di Blogger"
                            ),
        
        // 'email'             => array(
        //                         "url"       => 'mailto:' . $email_address . '?subject=' . $title . '&body=' . $desc,
        //                         "icon"      => "fab fa-email",
        //                         "title"     => "Membagikan di Email"
        //                     ),
        'facebook'          => array(
                                "url"       => 'http://www.facebook.com/sharer.php?u=' . $url,
                                "icon"      => "fab fa-facebook",
                                "title"     => "Membagikan di Facebook"
                            ),
        'flipboard'         => array(
                                "url"       => 'https://share.flipboard.com/bookmarklet/popout?v=2&title=' . $text . '&url=' . $url, 
                                "icon"      => "fab fa-flipboard",
                                "title"     => "Membagikan di Flipboard"
                            ),
        
        // 'gmail'             => array(
        //                         "url"       => 'https://mail.google.com/mail/?view=cm&to=' . $email_address . '&su=' . $title . '&body=' . $url . '&bcc=' . $bcc_email_address . '&cc=' . $cc_email_address,
        //                         "icon"      => "fab fa-mail",
        //                         "title"     => "Membagikan di Gmail"
        //                     ),
        'google.bookmarks'  => array(
                                "url"       => 'https://www.google.com/bookmarks/mark?op=edit&bkmk=' . $url . '&title=' . $title . '&annotation=' . $text . '&labels=' . $hash_tags . '',
                                "icon"      => "fab fa-google",
                                "title"     => "Membagikan di Google Bookmarks"
                            ),
        // 'instapaper'        => array(
        //                         "url"       => 'http://www.instapaper.com/edit?url=' . $url . '&title=' . $title . '&description=' . $desc,
        //                         "icon"      => "fab fa-instapaper",
        //                         "title"     => "Membagikan di Instapaper"
        //                     ),
        'line.me'           => array(
                                "url"       => 'https://lineit.line.me/share/ui?url=' . $url . '&text=' . $text,
                                "icon"      => "fab fa-line",
                                "title"     => "Membagikan di Line"
                            ),
        'linkedin'          => array(
                                "url"       => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $url,
                                "icon"      => "fab fa-linkedin",
                                "title"     => "Membagikan di Linkedin"
                            ),
        'pinterest'         => array(
                                "url"       => 'http://pinterest.com/pin/create/button/?url=' . $url ,
                                "icon"      => "fab fa-pinterest",
                                "title"     => "Membagikan di Pinterest"
                            ),
        'skype'             => array(
                                "url"       => 'https://web.skype.com/share?url=' . $url . '&text=' . $text,
                                "icon"      => "fab fa-skype",
                                "title"     => "Membagikan di Skype"
                            ),
        'tumblr'            => array(
                                "url"       => 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=' . $url . '&title=' . $title . '&caption=' . $desc . '&tags=' . $hash_tags,
                                "icon"      => "fab fa-tumblr",
                                "title"     => "Membagikan di Tumblr"
                            ),
        'twitter'           => array(
                                "url"       => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $text . '&via=' . $via . '&hashtags=' . $hash_tags,
                                "icon"      => "fab fa-twitter",
                                "title"     => "Membagikan di Twitter"
                            ),
        'whatsapp'          => array(
                                "url"       => 'https://api.whatsapp.com/send?text=' . $text . '%20' . $url,
                                "icon"      => "fab fa-whatsapp",
                                "title"     => "Membagikan di Whatsapp"
                            ),
        'yahoo'             => array(
                                "url"       => 'http://compose.mail.yahoo.com/?to=' . $email_address . '&subject=' . $title . '&body=' . $text,
                                "icon"      => "fab fa-yahoo",
                                "title"     => "Membagikan di Yahoo"
                            ),
    );

    return $sosmed;
}