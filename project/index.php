<?php
include "head.php";
?>

<script src="/js/index.js"></script>
<!--主体开始-->
<div class="main">
    <a href="" class="logo"></a>
    <div class="searchBox">
        <p class="chooseR"><input type="radio" name="schwhois" id="schwhois" checked/><label for='schwhois' class="active">查询whois</label></p>
        <p class="chooseR"><input type="radio" name="schwhois" id="whoissch" /><label for='whoissch'>whois反查</label></p>
        <div class="searchInput">
            <input id="key" type="text" class="inputBox" value="请输入要查询的域名"  />
            <input id="schBtn" type="button" class="schBtn" />
        </div>
        <p class="keyHelp"><a href="javascript:void(0)" class="w_jj">whois简介</a><a href="javascript:void(0)" class="w_fc">什么是whois反查?</a><a href="javascript:void(0)" class="w_jl">whois历史记录是什么?</a></p>
        <ul class="helpTXT">
            <li class="helpTXT_li" id="w_jj" style="display:none;">whois简单来说，就是一个用来查询域名是否已经被注册，以及注册域名的详细信息（如域名所有人、域名注册商、域名注册日期和过期日期等）。<br/>
                通过域名whois查询，可以查询域名归属者联系方式，以及注册和到期时间。<span>^</span></li>
            <li class="helpTXT_li" id="w_fc" style="display:none;">whois反查功能可以通过注册人或者注册人邮箱反查whois信息，得到相同信息的其它域名列表。<br/>
                通过whois反查，可以了解到域名所有者拥有哪些域名。<br/>
                目前whois反查的数据为程序自动收录的结果，并不能保证收录全部域名。<span>^</span></li>
            <li class="helpTXT_li" id="w_jl" style="display:none;">域名whois历史记录查询是指查询域名的whois信息(如注册者、邮箱、注册商、dns服务器等)的变更历史记录 ，可以了解到域名的所有权变更等重要信息。</br>
                目前域名whois历史记录的数据为程序自动收录的结果，并不能保证收录全部域名。<span>^</span></li>
        </ul>
    </div>

</div>
<!--主体结束-->
<?php
    include "end.php";
?>
