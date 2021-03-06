<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-header">  当前位置：<span class="text-primary">微信支付服务器证书验证</span></div>

<div class="page-content">
    <div class="alert alert-primary">
        <p>【重要】此工具用于修复七牛收回临时域名后导致图片无法显示的问题</p>
        <p>【重要】请您填写原始域名和新域名的时候都要填写完带有带有http或https协议头的域名</p>
        <p>例如:</p>
        <p>您曾用的七牛临时域名为http://omn8drpan.bkt.clouddn.com,要转为新域名https://www.storage.com</p>
        <p>原始域名请填写 http://omn8drpan.bkt.clouddn.com </p>
        <p>新域名请填写 https://www.storage.com </p>
    </div>
    <form method="post" class="form-horizontal form-validate">
        <div class="form-group " >
            <label class="col-lg control-label must">七牛原始域名</label>
            <div class="col-sm-3">
                <input type="text" name="originDomain" class="form-control" value="" data-rule-required='true'>
            </div>
        </div>
        <div class="form-group" >
            <label class="col-lg control-label must">七牛新域名</label>
            <div class="col-sm-3">
                <input type="text" name="newDomain" class="form-control" value="" data-rule-required='true'/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label "></label>
            <div class="col-sm-9">
                <input type="submit" value="立即修复" class="btn btn-primary"/>
            </div>
        </div>

    </form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>