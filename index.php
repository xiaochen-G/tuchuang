<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<title>沐宸 - 在线图床</title>
<meta name="keywords" content="阿云,多合一图床,Cdn图床,百度图床,阿里图床,京东图床,搜狗图床,搜狐图床,QQ图床,XKX图床,58图床,头条图床,网易图床,360图床,葫芦侠图床" />
<link rel="shortcut icon" href="https://p.pstatp.com/origin/pgc-image/23b3dad45d374bc28b7fc89acf9bd6cd" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jialezi/imgs@latest/static/style.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/jialezi/imgs@latest/static/file.js"></script>
<!-- 黑/白 -->
<link rel="stylesheet" href="usr/themes/default/assets/css/joe.mode.min.css">
<link rel="stylesheet" href="usr/themes/default/assets/css/joe.normalize.min.css">
<link rel="stylesheet" href="usr/themes/default/assets/css/joe.global.min.css">
<script src="usr/themes/default/assets/js/joe.global.min.js"></script>
<script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="https://hm.baidu.com/hm.js?47096df5fe81654d11927a045faab501";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();</script>
</head>

<body>
<input id="file" type="file" multiple="multiple" style="display: none;">
<div class="container">
<div class="upload">
<div class="title">开始上传
<select id="type" value="ali">
<option value="qq">QQ图床</option>
<option value="kefu">KF 图床</option>
<option value="c58">58 图床</option>
<option value="qihoo">360 图床</option>
<option value="mc">沐宸图床</option>
<option value="ayun">阿云图床</option>
<option value="ali">阿里图床</option>
<option value="jd">京东图床</option>
<option value="sg">搜狗图床</option>
<option value="tt">头条图床</option>
<option value="wy">网易图床</option>
<option value="sh">搜狐图床</option>
<option value="catbox">猫盒图床</option>
<option value="muke">慕课图床</option>
<option value="gtimg">极图图床</option>
<option value="vxichina">微聊图床</option>
<option value="hl">葫芦侠图床</option>
</select>
</div>
<div class="content" id="dragbox">
<svg class="icon" viewBox="0 0 1335 1024" version="1.1" xmlns="https://www.w3.org/2000/svg">
<path d="M1097.060174 392.125217C1073.730783 172.966957 893.261913 0.378435 666.089739 0.378435c-227.127652 0-415.610435 171.920696-430.948174 391.746782C101.910261 415.454609 0 525.356522 0 666.601739c0 149.147826 125.239652 274.476522 274.476522 274.476522h195.828869v-78.669913H274.476522a193.691826 193.691826 0 0 1-195.940174-195.806609c0-102.021565 70.678261-180.580174 172.588522-195.917913l54.561391-8.013913 8.013913-62.553043c16.005565-180.580174 172.588522-321.157565 352.389565-321.157566 180.580174 0 337.029565 141.356522 352.389565 321.157566v62.553043l62.664348 8.013913c101.910261 16.005565 172.477217 93.896348 172.477218 195.917913 0 109.901913-85.904696 195.806609-195.806609 195.806609h-195.917913v78.580869h196.029217c149.147826 0 274.476522-125.261913 274.476522-274.476521 0-141.133913-101.999304-259.072-235.25287-274.387479" p-id="2345" fill="#909399"></path>
<path d="M612.218435 364.766609l1.335652 2.003478L389.698783 590.58087l55.229217 55.362782 181.938087-181.938087V1018.88h78.558609v-78.58087h156.471652-156.471652V458.039652l183.808 183.919305 55.340521-55.340522-277.147826-277.058783-55.229217 55.229218z m-141.913044 575.666087h156.471652-156.716521 0.222608z" p-id="2346" fill="#909399"></path>
</svg>
<p class="desc">点击上传 / 粘贴上传 / 拖拽上传</p>
</div>
</div>
<div class="filelist">
</a> 
<div class="title">上传列表  -  <span id="localtime"></span><script type="text/javascript">function showLocale(objD)
{var str,colorhead,colorfoot;var yy = objD.getYear();
if(yy<1900) yy = yy+1900;
        var MM = objD.getMonth()+1;
    if(MM<10) MM = '0' + MM;
    var dd = objD.getDate();
    if(dd<10) dd = '0' + dd;
    var hh = objD.getHours();
    if(hh<10) hh = '0' + hh;
    var mm = objD.getMinutes();
    if(mm<10) mm = '0' + mm;
    var ss = objD.getSeconds();
    if(ss<10) ss = '0' + ss;
    var ww = objD.getDay();
    if  ( ww==0 )  colorhead="<font color=\"#FF3030\">";
    if  ( ww > 0 && ww < 6 )  colorhead="<font color=\"#FF3030\">";
    if  ( ww==6 )  colorhead="<font color=\"#FF3030\">";
    if  (ww==0)  ww="星期日";
    if  (ww==1)  ww="星期一";
    if  (ww==2)  ww="星期二";
    if  (ww==3)  ww="星期三";
    if  (ww==4)  ww="星期四";
    if  (ww==5)  ww="星期五";
    if  (ww==6)  ww="星期六";
    colorfoot="</font>"
    str = colorhead + yy + "-" + MM + "-" + dd + "丨" + hh + ":" + mm + ":" + ss + "丨" + ww + colorfoot;
    return(str);}function tick()
{var today;today = new Date();document.getElementById("localtime").innerHTML = showLocale(today);window.setTimeout("tick()", 1000);}
tick();</script>
<div class="copyall" style="display:none">
<button onclick="sel(this);" name="xkx" id="_url">URL</button>
<button onclick="sel(this);" name="xkx" id="_html">HTML</button>
<button onclick="sel(this);" name="xkx" id="_Ubb">UBB</button>
<button onclick="sel(this);" name="xkx" id="_markdown">MD</button>
<button onclick="copyAll(this);" name="xkx" id="copyAll" style="width:70px;background-color: #d0dbee;">复制全部</button>
</div>
</div>
<div class="list"></div>
</div>
<div id="footer" style="position:fixed;width: 100%;text-align: center;bottom: 0px;display: block;">
<div style="height: 20px">
   <div class="syfooter"><p class="text-center">          ㅤ<svg class="icon" style="width: 1.5em;height: 1.5em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="904"><path d="M513.24928 512m-397.2608 0a397.2608 397.2608 0 1 0 794.5216 0 397.2608 397.2608 0 1 0-794.5216 0Z" fill="#68CAFE" p-id="905"></path><path d="M773.82656 214.47168c51.4304 66.96448 82.06848 150.72768 82.06848 241.6896 0 219.40224-177.85856 397.26592-397.26592 397.26592-99.73248 0-190.81216-36.8384-260.57216-97.54112 72.61696 94.55616 186.752 155.56608 315.1872 155.56608 219.40736 0 397.26592-177.86368 397.26592-397.26592 0-119.66464-52.98688-226.88768-136.68352-299.71456z" fill="#29ABE2" p-id="906"></path><path d="M262.94784 716.09856c-111.50848 0-196.92544-14.7456-235.26912-43.33056-14.86336-11.00288-23.36768-24.27904-25.41056-39.24992-3.17952-23.02976 9.52832-46.2848 37.6576-69.08416 3.29216-2.6112 52.29568-29.83424 60.2368-31.65184 11.11552-2.3808 21.89312 4.42368 24.39168 15.43168a20.3008 20.3008 0 0 1-13.27104 23.81824c-6.69184 2.94912-42.0864 22.00576-46.848 25.06752-14.06464 11.45344-22.68672 23.36768-21.66272 30.85312 0.68096 4.64896 5.44256 9.1904 9.41568 12.13952 47.6416 35.5072 225.85344 51.38432 474.1632 13.15328 309.12-47.75424 462.03392-136.68864 457.37984-171.06432-1.36192-9.86624-21.44256-31.53408-72.25344-31.53408a20.4032 20.4032 0 0 1-20.41856-20.41856 20.48 20.48 0 0 1 20.41856-20.41856c71.12704 0 108.32896 34.7136 112.75264 66.816 13.952 101.41696-286.31552 185.35424-491.52512 217.00608-98.23744 15.09888-190.68928 22.46656-269.75744 22.46656z" fill="#000000" p-id="907"></path><path d="M273.57184 388.27008a23.06048 23.06048 0 0 0-29.79328 12.7744 309.06368 309.06368 0 0 0-17.29024 58.77248c-2.29376 12.48768 5.98016 24.51968 18.87744 26.88512 1.29536 0.22016 2.4576 0.36352 3.80928 0.36352a22.93248 22.93248 0 0 0 22.5536-18.7904 270.16192 270.16192 0 0 1 14.77632-50.1504c4.55168-11.63776-1.152-24.99072-12.93312-29.85472zM503.15776 228.17792a22.9888 22.9888 0 0 0-26.91584-18.42176C403.5072 223.70816 337.65888 263.30624 290.88768 321.1776a22.8864 22.8864 0 0 0-5.11488 17.0496c0.65536 6.144 3.68128 11.648 8.704 15.6416a23.59808 23.59808 0 0 0 14.24384 4.90496c6.89664 0 13.40416-3.11808 17.90464-8.61696 39.94112-49.46944 96.15872-83.27168 158.24384-95.17056 12.36992-2.31936 20.57728-14.34624 18.28864-26.80832z" fill="#F5F5F5" p-id="908"></path><path d="M258.21184 366.67904a23.06048 23.06048 0 0 0-29.79328 12.7744 309.06368 309.06368 0 0 0-17.29024 58.77248c-2.29376 12.48768 5.98016 24.51968 18.87744 26.88512 1.29536 0.22016 2.4576 0.36352 3.80928 0.36352a22.93248 22.93248 0 0 0 22.5536-18.7904 270.16192 270.16192 0 0 1 14.77632-50.1504c4.55168-11.63776-1.152-24.99072-12.93312-29.85472zM487.79776 206.58688a22.9888 22.9888 0 0 0-26.91584-18.42176C388.1472 202.11712 322.29888 241.7152 275.52768 299.58656a22.8864 22.8864 0 0 0-5.11488 17.0496c0.65536 6.144 3.68128 11.648 8.704 15.6416a23.59808 23.59808 0 0 0 14.24384 4.90496c6.89664 0 13.40416-3.11808 17.90464-8.61696 39.94112-49.46944 96.15872-83.27168 158.24384-95.17056 12.36992-2.32448 20.57728-14.34624 18.28864-26.80832z" fill="#FEDD5D" p-id="909"></path><path d="M513.08032 943.31392c-237.8752 0-431.5136-193.52576-431.5136-431.5136 0-11.5712 0.45056-23.25504 1.36192-34.59584a434.05824 434.05824 0 0 1 6.24128-46.62272c38.6816-202.94144 216.89344-350.29504 423.80288-350.29504 158.69952 0 304.128 86.77888 379.78624 226.42176 5.32992 9.87136 1.69984 22.3488-8.27904 27.67872-9.87136 5.32992-22.34368 1.69984-27.67872-8.28416a390.54336 390.54336 0 0 0-343.82848-204.9792c-187.17696 0.11264-348.60032 133.4016-383.5392 317.16864a401.4336 401.4336 0 0 0-5.67296 42.19904 411.2896 411.2896 0 0 0-1.24928 31.42144c0 215.41888 175.2576 390.56896 390.56384 390.56896s390.56384-175.2576 390.56384-390.56896c0-25.97888-2.6112-51.95264-7.59808-77.25056-2.26816-11.00288 4.992-21.78048 15.99488-24.04864 11.00288-2.26816 21.78048 4.992 24.04864 15.99488a437.94432 437.94432 0 0 1 8.3968 85.30432c0.11264 237.8752-193.41312 431.40096-431.40096 431.40096z" fill="#000000" p-id="910"></path></svg>
&nbsp;&nbsp;2020 - 2021&nbsp;&nbsp;<a href="./" title="AEINK" rel="link" target="_blank">沐宸 <b style="color: #ff4425;">♥ </b></a>版权所有.
      <!-- <a href="http://qqbk.icu/" target="_blank">黑科技Get</a> --><script>

      </div>
    </p>
	<script src="js/index.js"></script><!-- 核心插件 -->
		<script src="js/all.js"></script><!-- 图标库 -->
		<script src="js/Sitetime.js"></script><!-- 运行时间 -->
		<script src="js/Mouse.js"></script><!-- 点击烟花特效 -->
		<script src="js/cursor2.js" async></script><!-- 点击烟花特效 -->
	    <script src="js/love.js"></script><!-- 点击爱心特效 -->
</div>
               <div class="item">
                    </div>
    </div>
</footer>

<div class="joe_action">
    <div class="joe_action_item scroll">
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M725.902 498.916c18.205-251.45-93.298-410.738-205.369-475.592l-6.257-3.982-6.258 3.414c-111.502 64.853-224.711 224.142-204.8 475.59-55.751 53.476-80.214 116.623-80.214 204.8v15.36l179.2-35.27c11.378 40.39 58.596 69.973 113.21 69.973 54.613 0 101.262-29.582 112.64-68.836l180.337 36.41v-15.36c-.569-89.885-25.031-153.6-82.489-206.507zM571.733 392.533c-33.564 31.29-87.04 28.445-118.329-5.12s-28.444-87.04 5.12-117.76c33.565-31.289 87.04-28.444 118.33 5.12s28.444 86.471-5.12 117.76zm-56.32 368.64c-35.84 0-64.284 29.014-64.284 64.285 0 35.84 54.044 182.613 64.284 182.613s64.285-146.773 64.285-182.613c0-35.271-29.014-64.285-64.285-64.285z" />
        </svg>
          </div>
    <div class="joe_action_item mode">
        <svg class="icon-1" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M587.264 104.96c33.28 57.856 52.224 124.928 52.224 196.608 0 218.112-176.128 394.752-393.728 394.752-29.696 0-58.368-3.584-86.528-9.728C223.744 832.512 369.152 934.4 538.624 934.4c229.376 0 414.72-186.368 414.72-416.256 1.024-212.992-159.744-389.12-366.08-413.184z" />
            <path d="M340.48 567.808l-23.552-70.144-70.144-23.552 70.144-23.552 23.552-70.144 23.552 70.144 70.144 23.552-70.144 23.552-23.552 70.144zM168.96 361.472l-30.208-91.136-91.648-30.208 91.136-30.208 30.72-91.648 30.208 91.136 91.136 30.208-91.136 30.208-30.208 91.648z" />
        </svg>
        <svg class="icon-2" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
            <path d="M234.24 512a277.76 277.76 0 1 0 555.52 0 277.76 277.76 0 1 0-555.52 0zM512 187.733a42.667 42.667 0 0 1-42.667-42.666v-102.4a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 187.733zm-258.987 107.52a42.667 42.667 0 0 1-29.866-12.373l-72.96-73.387a42.667 42.667 0 0 1 59.306-59.306l73.387 72.96a42.667 42.667 0 0 1 0 59.733 42.667 42.667 0 0 1-29.867 12.373zm-107.52 259.414H42.667a42.667 42.667 0 0 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zm34.134 331.946a42.667 42.667 0 0 1-29.44-72.106l72.96-73.387a42.667 42.667 0 0 1 59.733 59.733l-73.387 73.387a42.667 42.667 0 0 1-29.866 12.373zM512 1024a42.667 42.667 0 0 1-42.667-42.667V878.507a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 1024zm332.373-137.387a42.667 42.667 0 0 1-29.866-12.373l-73.387-73.387a42.667 42.667 0 0 1 0-59.733 42.667 42.667 0 0 1 59.733 0l72.96 73.387a42.667 42.667 0 0 1-29.44 72.106zm136.96-331.946H878.507a42.667 42.667 0 1 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zM770.987 295.253a42.667 42.667 0 0 1-29.867-12.373 42.667 42.667 0 0 1 0-59.733l73.387-72.96a42.667 42.667 0 1 1 59.306 59.306l-72.96 73.387a42.667 42.667 0 0 1-29.866 12.373z" />
        </svg>
<script type="text/javascript">
(function() {var coreSocialistValues = ["富强", "民主", "文明", "和谐", "自由", "平等", "公正", "法治", "爱国", "敬业", "诚信", "友善"], index = Math.floor(Math.random() * coreSocialistValues.length);document.body.addEventListener('click', function(e) {if (e.target.tagName == 'A') {return;}var x = e.pageX, y = e.pageY, span = document.createElement('span');span.textContent = coreSocialistValues[index];index = (index + 1) % coreSocialistValues.length;span.style.cssText = ['z-index: 9999999; position: absolute; font-weight: bold; color: #ff6651; top: ', y - 20, 'px; left: ', x, 'px;'].join('');document.body.appendChild(span);animate(span);});function animate(el) {var i = 0, top = parseInt(el.style.top), id = setInterval(frame, 16.7);function frame() {if (i > 180) {clearInterval(id);el.parentNode.removeChild(el);} else {i+=2;el.style.top = top - i + 'px';el.style.opacity = (180 - i) / 180;}}}}());
</script></div></div></div></div></header></div></div></section></div><script type="text/javascript" src="https://ohan.gitee.io/HanKu/HanJs/HanSnow.js"></script></body>
</script><div class="back-to-top cd-top faa-float animated cd-is-visible" style="top: -900px;"></div><script type="text/javascript" src="usr/plugins/AliceStyle/static/js/app/szgotop.js"></script><canvas id="fireworks" style="position:fixed;left:0;top:0;pointer-events:none;z-index:999999999999;"></canvas><script>				$("body").css("cursor", "url('http://qqbk.icu/usr/plugins/AliceStyle/static/mouse/fireworks/normal.cur'), default");
				$("a").css("cursor", "url('http://qqbk.icu/usr/plugins/AliceStyle/static/mouse/fireworks/link.cur'), pointer");</script><script type="text/javascript" src="usr/plugins/AliceStyle/static/libs/anime.min.js"></script><script type='text/javascript' src='usr/plugins/AliceStyle/static/js/app/fireworks.js'></script><script type="text/javascript" src="usr/plugins/AliceStyle/static/js/app/as-tool.js"></script><script type="text/javascript" src="usr/plugins/AliceStyle/static/js/app/as-style.js"></script><script>console.log("\n %c AliceStyle v3.4.0 Pro By 萌卜兔's | https://racns.com/374.html","color:#fff;background: linear-gradient(to right , #7A88FF, #9ba5ff);padding:5px;border-radius: 10px;");</script>	</div>
</body>
</div>
<script type="text/javascript">
var tx=new Array("欢迎访问沐宸图床","本站永久免费使用","持续为你更新……","等你的探索哦！","谢谢访问");
var txcount=4;
var i=1;
var wo=0;
var ud=1;
function animatetitle()
{
window.document.title=tx[wo].substr(0,i)+"";
if(ud==0)i--;
if(ud==1)i++;
if(i==-1){ud=1;i=0;wo++;wo=wo%txcount;}
if(i==tx[wo].length+10){ud=0;i=tx[wo].length;}
parent.window.document.title=tx[wo].substr(0,i)+"";
setTimeout("animatetitle()",100);
}
animatetitle();
</script>
</body>
</html>
