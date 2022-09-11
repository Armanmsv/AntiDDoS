<?php

# Switch to control AntiDDoS state.
$AM_anti_ddos_protection_enable = true ;

# Activate debug statements.
$AM_anti_ddos_debug = false ;

# Test visitors against trusted UserAgent's list.
$AM_test_not_rated_ua = false ;

# cookie label
$AM_secure_cookie_label = 'ArmanMsv_Anti_DDoS';

# Secret key salt to avoid copy/past of the Cookie between visitors.
# YOU MUST GENERATE NEW $AM_secure_cookie_salt BEFORE USE IT ON YOUR OWN SITE. 
$AM_secure_cookie_salt = "armanmsvirRangerstmir" ;

# Days to use secure cookie.
$AM_secure_cookie_days = 1 ;

# Delay in seconds before redirection to original URL.
$AM_redirect_delay = 3 ;