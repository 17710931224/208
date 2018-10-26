@extends ('admin.layouts.master')

@section ('main')
<style type="text/css">

	h2 {

		padding: 0 0 10px 0;

		border-bottom: 1px solid #e3e3e3;

		color: 444;

	}

	.submit {

		background-color: #3b7dc3;

		color: #fff;

		padding: 5px 22px;

		border-radius: 2px;

		border: 0px;

		cursor: pointer;

		font-size: 14px;

	}

	#main {

		width: 80%;

		margin: 0px auto;

	}

</style>
@if (count($errors) > 0)
	<div class="alert alert-danger alert-dismissible">
		<i class="fa fa-exclamation-circle"></i> 
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
	  	{{$errors->first()}}
    </div>
@endif
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <i class="fa fa-pencil"></i>
      客户基本资料 - 详情
    </h3>
  </div>
  <div class="panel-body">
    <form action="/admin/customer" class="form-horizontal" enctype="multipart/form-data" id="form-customer" method="post">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-general">通用</a></li>
        <li><a data-toggle="tab" href="#tab-affiliate">会员</a></li>
        <li><a data-toggle="tab" href="#tab-avatar">头像</a></li>
       <!--  <li><a data-toggle="tab" href="#tab-ip">IP地址</a></li> -->
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab-general">
          <div class="row">
	        <div class="col-sm-2">
	          <ul class="nav nav-pills nav-stacked" id="address">
	            <li class="active"><a data-toggle="tab" href="#tab-customer">通用</a></li>
	            <li id="address-add">
	              <a onclick="addAddress();">
	                <i class="fa fa-plus-circle"></i>
	                新增地址
	              </a>
	            </li>
	          </ul>
	        </div>
	        <!-- 通用開始 -->
	        <div class="col-sm-10">
	          <div class="tab-content">
	            <div class="tab-pane active" id="tab-customer">
	              <fieldset>
	                <legend>客户资料</legend>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label" for="input-customer-group">客户组</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" id="input-customer-group" name="customer_group_id">
	                      <!-- <option selected="selected" value="1">默认</option> -->
	                      @foreach($results as $k => $v)
							<option value="{{$v->customer_group_id}}">{{$v->CustomerGroupDescription->name}}</option>
	                      @endforeach
	                    </select>
	                  </div>
	                </div>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-firstname">名字</label>
	                  <div class="col-sm-10"><input class="form-control" id="input-firstname" name="firstname" placeholder="名字" type="text" value="{{old('firstname')}}" /></div>
	                </div>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-lastname">姓氏</label>
	                  <div class="col-sm-10"><input class="form-control" id="input-lastname" name="lastname" placeholder="姓氏" type="text" value="{{old('lastname')}}" /></div>
	                </div>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-email">电子邮件</label>
	                  <div class="col-sm-10"><input class="form-control" id="input-email" name="email" placeholder="电子邮箱地址" type="text" value="{{old('email')}}" /></div>
	                </div>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-mobile">手机号</label>
	                  <div class="col-sm-10"><input class="form-control" id="input-mobile" name="mobile" placeholder="手机号" type="text" value="{{old('mobile')}}" /></div>
	                </div>
	              </fieldset>
	              <fieldset>
	                <legend>密码</legend>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-password">密码</label>
	                  <div class="col-sm-10"><input autocomplete="off" class="form-control" id="input-password" name="password" placeholder="密码" type="password"/></div>
	                </div>
	                <div class="form-group required">
	                  <label class="col-sm-2 control-label" for="input-confirm">确认密码</label>
	                  <div class="col-sm-10"><input autocomplete="off" class="form-control" id="input-confirm" name="confirm" placeholder="再次输入密码" type="password"/></div>
	                </div>
	              </fieldset>
	              <fieldset>
	                <legend>其它</legend>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label" for="input-newsletter">订阅简报</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" id="input-newsletter" name="newsletter">
	                      <option value="1">启用</option>
	                      <option selected="selected" value="2">禁用</option>
	                    </select>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label" for="input-status">状态</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" id="input-status" name="status">
	                      <option selected="selected" value="1">启用</option>
	                      <option value="2">禁用</option>
	                    </select>
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label class="col-sm-2 control-label" for="input-safe">安全</label>
	                  <div class="col-sm-10">
	                    <select class="form-control" id="input-safe" name="safe">
	                      <option value="1">是</option>
	                      <option selected="selected" value="2">否</option>
	                    </select>
	                  </div>
	                </div>
	              </fieldset>
	            </div>
	          </div>
	        </div>
	        <!-- 通用結束 -->
          </div>
        </div>
	    <div class="tab-pane" id="tab-affiliate">
	        <fieldset>
	            <legend>会员详情</legend>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-company">公司</label>
	                <div class="col-sm-10"><input class="form-control" id="input-company" name="company" placeholder="公司" type="text" value=""/></div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-website">网站</label>
	                <div class="col-sm-10"><input class="form-control" id="input-website" name="website" placeholder="网站" type="text" value=""/></div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-tracking"><span data-original-title="将用于跟踪推荐的跟踪代码。" data-toggle="tooltip" title="">跟踪代码</span></label>
	                <div class="col-sm-10"><input class="form-control" id="input-tracking" name="tracking" placeholder="跟踪代码" type="text" value=""/></div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-commission"><span data-original-title="Percentage the affiliate receives on each order." data-toggle="tooltip" title="">佣金 (%)</span></label>
	                <div class="col-sm-10"><input class="form-control" id="input-commission" name="commission" placeholder="佣金 (%)" type="text" value="5"/></div>
	            </div>
	        </fieldset>
	        <fieldset>
	            <legend>付款明细</legend>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-tax">传真编号</label>
	                <div class="col-sm-10"><input class="form-control" id="input-tax" name="tax" placeholder="传真编号" type="text" value=""/></div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label">付款方式</label>
	                <div class="col-sm-10">
	                    <div class="radio">
	                        <label>
	                            <input checked="checked" name="payment" type="radio" value="cheque"/>
	                            Cheque
	                        </label>
	                    </div>
	                    <div class="radio">
	                        <label>
	                            <input name="payment" type="radio" value="paypal"/>
	                            PayPal
	                        </label>
	                    </div>
	                    <div class="radio">
	                        <label>
	                            <input name="payment" type="radio" value="bank"/>
	                            银行转帐
	                        </label>
	                    </div>
	                </div>
	            </div>
	            <div class="payment" id="payment-cheque" style="display: block;">
	                <div class="form-group required">
	                    <label class="col-sm-2 control-label" for="input-cheque">检查收款人姓名</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-cheque" name="cheque" placeholder="检查收款人姓名" type="text" value=""/></div>
	                </div>
	            </div>
	            <div class="payment" id="payment-paypal" style="display: none;">
	                <div class="form-group required">
	                    <label class="col-sm-2 control-label" for="input-paypal">PayPal电子邮件帐户</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-paypal" name="paypal" placeholder="PayPal电子邮件帐户" type="text" value=""/></div>
	                </div>
	            </div>
	            <div class="payment" id="payment-bank" style="display: none;">
	                <div class="form-group">
	                    <label class="col-sm-2 control-label" for="input-bank-name">银行名称</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-bank-name" name="bank_name" placeholder="银行名称" type="text" value=""/></div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-2 control-label" for="input-bank-branch-number">ABA/BSB 编号（分支编号）</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-bank-branch-number" name="bank_branch_number" placeholder="ABA/BSB 编号（分支编号）" type="text" value=""/></div>
	                </div>
	                <div class="form-group">
	                    <label class="col-sm-2 control-label" for="input-bank-swift-code">SWIFT 码</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-bank-swift-code" name="bank_swift_code" placeholder="SWIFT 码" type="text" value=""/></div>
	                </div>
	                <div class="form-group required">
	                    <label class="col-sm-2 control-label" for="input-bank-account-name">账户名称</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-bank-account-name" name="bank_account_name" placeholder="账户名称" type="text" value=""/></div>
	                </div>
	                <div class="form-group required">
	                    <label class="col-sm-2 control-label" for="input-bank-account-number">账户编号</label>
	                    <div class="col-sm-10"><input class="form-control" id="input-bank-account-number" name="bank_account_number" placeholder="账户编号" type="text" value=""/></div>
	                </div>
	            </div>
	            <div class="form-group">
	                <label class="col-sm-2 control-label" for="input-affiliate">状态</label>
	                <div class="col-sm-10">
	                    <select class="form-control" id="input-affiliate" name="affiliate_status">
	                        <option value="1">启用</option>
	                        <option selected="selected" value="0">禁用</option>
	                    </select>
	                </div>
	            </div>
	        </fieldset>
	    </div>
	    <div class="tab-pane" id="tab-avatar">
				<legend>头像</legend>
				<img width="180px" id="avatar" height="180px" src="/image/photo.jpg" />
				<br />图片正常大小: 180 * 180
			<div style="margin: 15px 0 0 0">
				<input type="file" name="avatar" id="fileInput" style="cursor: pointer;" width="100px" name="photo" /> <br />
			</div>
	    </div>
        <div class="tab-pane" id="tab-ip">
          <fieldset>
            <legend>IP</legend>
            <div id="ip">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">IP</td>
                      <td class="text-right">Total Accounts</td>
                      <td class="text-left">Date Added</td>
                    </tr>
                  </thead>
                  <tbody><tr><td class="text-center" colspan="3">No results!</td></tr></tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-sm-6 text-left"></div>
                <div class="col-sm-6 text-right">Showing 0 to 0 of 0 (0 Pages)</div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      {{csrf_field()}}
      <button class="btn btn-primary"><i class="fa fa-save"></i> 保存</button>
      <a href="/admin/customer" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="取消"><i class="fa fa-reply"></i> 取消</a>
    </form>
  </div>
</div>
<script type="text/javascript">
	
</script>
<script type="text/javascript">
  $('input[name="affiliate"]').on('change', function() {
    if ($(this).val() == '1') { 
      $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', false);
    } else {
      $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', true);
    }
  }); 

  $('input[name=\'affiliate\']:checked').trigger('change');
</script>
<script type="text/javascript">
  $('select[name=\'customer_group_id\']').on('change', function() {
    $.ajax({
      url: '' + this.value,
      dataType: 'json',
      success: function(json) {
        $('.custom-field').hide();
        $('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          $('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            $('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

  $('select[name=\'customer_group_id\']').trigger('change');
</script>
<script type="text/javascript">
	function getObjectURL(file){
			var url = null;
			if(window.createObjectURL != undefined){  // basic
				url = window.createObjectURL(file);			
			} else if(window.URL != undefined) {      // Firefox
				url = window.URL.createObjectURL(file);
			} else if(window.webkitURL != undefined) { // Apple webkit or Google Chrome
				url = window.webkitURL.createObjectURL(file);
			}else {
				return false;
			}
			return url;
		}
		
	$('#fileInput').change(function (){
		var objUrl = getObjectURL(this.files[0]);
		if(objUrl){
			$('#avatar').attr('src', objUrl);
		}
	});
</script>
<script type="text/javascript">
var address_row = 1;

  function addAddress() {
    html  = '<div class="tab-pane" id="tab-address' + address_row + '">';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '">名字</label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="名字" id="input-firstname' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-lastname' + address_row + '">姓氏</label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="姓氏" id="input-lastname' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-address' + address_row + '">地址</label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address]" value="" placeholder="地址" id="input-address' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">市（县）</label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="市（县）" id="input-city' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '">邮政编码</label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="邮政编码" id="input-postcode' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '">国家及受管轄地区（域）</label>';
    html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';
      html += '         <option value=""> --- Please Select --- </option>';
            html += '         <option value="244">Aaland\x20Islands</option>';
            html += '         <option value="1">Afghanistan</option>';
            html += '         <option value="2">Albania</option>';
            html += '         <option value="3">Algeria</option>';
            html += '         <option value="4">American\x20Samoa</option>';
            html += '         <option value="5">Andorra</option>';
            html += '         <option value="6">Angola</option>';
            html += '         <option value="7">Anguilla</option>';
            html += '         <option value="8">Antarctica</option>';
            html += '         <option value="9">Antigua\x20and\x20Barbuda</option>';
            html += '         <option value="10">Argentina</option>';
            html += '         <option value="11">Armenia</option>';
            html += '         <option value="12">Aruba</option>';
            html += '         <option value="252">Ascension\x20Island\x20\x28British\x29</option>';
            html += '         <option value="13">Australia</option>';
            html += '         <option value="14">Austria</option>';
            html += '         <option value="15">Azerbaijan</option>';
            html += '         <option value="16">Bahamas</option>';
            html += '         <option value="17">Bahrain</option>';
            html += '         <option value="18">Bangladesh</option>';
            html += '         <option value="19">Barbados</option>';
            html += '         <option value="20">Belarus</option>';
            html += '         <option value="21">Belgium</option>';
            html += '         <option value="22">Belize</option>';
            html += '         <option value="23">Benin</option>';
            html += '         <option value="24">Bermuda</option>';
            html += '         <option value="25">Bhutan</option>';
            html += '         <option value="26">Bolivia</option>';
            html += '         <option value="245">Bonaire,\x20Sint\x20Eustatius\x20and\x20Saba</option>';
            html += '         <option value="27">Bosnia\x20and\x20Herzegovina</option>';
            html += '         <option value="28">Botswana</option>';
            html += '         <option value="29">Bouvet\x20Island</option>';
            html += '         <option value="30">Brazil</option>';
            html += '         <option value="31">British\x20Indian\x20Ocean\x20Territory</option>';
            html += '         <option value="32">Brunei\x20Darussalam</option>';
            html += '         <option value="33">Bulgaria</option>';
            html += '         <option value="34">Burkina\x20Faso</option>';
            html += '         <option value="35">Burundi</option>';
            html += '         <option value="36">Cambodia</option>';
            html += '         <option value="37">Cameroon</option>';
            html += '         <option value="38">Canada</option>';
            html += '         <option value="251">Canary\x20Islands</option>';
            html += '         <option value="39">Cape\x20Verde</option>';
            html += '         <option value="40">Cayman\x20Islands</option>';
            html += '         <option value="41">Central\x20African\x20Republic</option>';
            html += '         <option value="42">Chad</option>';
            html += '         <option value="43">Chile</option>';
            html += '         <option value="44">China</option>';
            html += '         <option value="45">Christmas\x20Island</option>';
            html += '         <option value="46">Cocos\x20\x28Keeling\x29\x20Islands</option>';
            html += '         <option value="47">Colombia</option>';
            html += '         <option value="48">Comoros</option>';
            html += '         <option value="49">Congo</option>';
            html += '         <option value="50">Cook\x20Islands</option>';
            html += '         <option value="51">Costa\x20Rica</option>';
            html += '         <option value="52">Cote\x20D\x27Ivoire</option>';
            html += '         <option value="53">Croatia</option>';
            html += '         <option value="54">Cuba</option>';
            html += '         <option value="246">Curacao</option>';
            html += '         <option value="55">Cyprus</option>';
            html += '         <option value="56">Czech\x20Republic</option>';
            html += '         <option value="237">Democratic\x20Republic\x20of\x20Congo</option>';
            html += '         <option value="57">Denmark</option>';
            html += '         <option value="58">Djibouti</option>';
            html += '         <option value="59">Dominica</option>';
            html += '         <option value="60">Dominican\x20Republic</option>';
            html += '         <option value="61">East\x20Timor</option>';
            html += '         <option value="62">Ecuador</option>';
            html += '         <option value="63">Egypt</option>';
            html += '         <option value="64">El\x20Salvador</option>';
            html += '         <option value="65">Equatorial\x20Guinea</option>';
            html += '         <option value="66">Eritrea</option>';
            html += '         <option value="67">Estonia</option>';
            html += '         <option value="68">Ethiopia</option>';
            html += '         <option value="69">Falkland\x20Islands\x20\x28Malvinas\x29</option>';
            html += '         <option value="70">Faroe\x20Islands</option>';
            html += '         <option value="71">Fiji</option>';
            html += '         <option value="72">Finland</option>';
            html += '         <option value="74">France,\x20Metropolitan</option>';
            html += '         <option value="75">French\x20Guiana</option>';
            html += '         <option value="76">French\x20Polynesia</option>';
            html += '         <option value="77">French\x20Southern\x20Territories</option>';
            html += '         <option value="126">FYROM</option>';
            html += '         <option value="78">Gabon</option>';
            html += '         <option value="79">Gambia</option>';
            html += '         <option value="80">Georgia</option>';
            html += '         <option value="81">Germany</option>';
            html += '         <option value="82">Ghana</option>';
            html += '         <option value="83">Gibraltar</option>';
            html += '         <option value="84">Greece</option>';
            html += '         <option value="85">Greenland</option>';
            html += '         <option value="86">Grenada</option>';
            html += '         <option value="87">Guadeloupe</option>';
            html += '         <option value="88">Guam</option>';
            html += '         <option value="89">Guatemala</option>';
            html += '         <option value="256">Guernsey</option>';
            html += '         <option value="90">Guinea</option>';
            html += '         <option value="91">Guinea\x2DBissau</option>';
            html += '         <option value="92">Guyana</option>';
            html += '         <option value="93">Haiti</option>';
            html += '         <option value="94">Heard\x20and\x20Mc\x20Donald\x20Islands</option>';
            html += '         <option value="95">Honduras</option>';
            html += '         <option value="96">Hong\x20Kong</option>';
            html += '         <option value="97">Hungary</option>';
            html += '         <option value="98">Iceland</option>';
            html += '         <option value="99">India</option>';
            html += '         <option value="100">Indonesia</option>';
            html += '         <option value="101">Iran\x20\x28Islamic\x20Republic\x20of\x29</option>';
            html += '         <option value="102">Iraq</option>';
            html += '         <option value="103">Ireland</option>';
            html += '         <option value="254">Isle\x20of\x20Man</option>';
            html += '         <option value="104">Israel</option>';
            html += '         <option value="105">Italy</option>';
            html += '         <option value="106">Jamaica</option>';
            html += '         <option value="107">Japan</option>';
            html += '         <option value="257">Jersey</option>';
            html += '         <option value="108">Jordan</option>';
            html += '         <option value="109">Kazakhstan</option>';
            html += '         <option value="110">Kenya</option>';
            html += '         <option value="111">Kiribati</option>';
            html += '         <option value="253">Kosovo,\x20Republic\x20of</option>';
            html += '         <option value="114">Kuwait</option>';
            html += '         <option value="115">Kyrgyzstan</option>';
            html += '         <option value="116">Lao\x20People\x27s\x20Democratic\x20Republic</option>';
            html += '         <option value="117">Latvia</option>';
            html += '         <option value="118">Lebanon</option>';
            html += '         <option value="119">Lesotho</option>';
            html += '         <option value="120">Liberia</option>';
            html += '         <option value="121">Libyan\x20Arab\x20Jamahiriya</option>';
            html += '         <option value="122">Liechtenstein</option>';
            html += '         <option value="123">Lithuania</option>';
            html += '         <option value="124">Luxembourg</option>';
            html += '         <option value="125">Macau</option>';
            html += '         <option value="127">Madagascar</option>';
            html += '         <option value="128">Malawi</option>';
            html += '         <option value="129">Malaysia</option>';
            html += '         <option value="130">Maldives</option>';
            html += '         <option value="131">Mali</option>';
            html += '         <option value="132">Malta</option>';
            html += '         <option value="133">Marshall\x20Islands</option>';
            html += '         <option value="134">Martinique</option>';
            html += '         <option value="135">Mauritania</option>';
            html += '         <option value="136">Mauritius</option>';
            html += '         <option value="137">Mayotte</option>';
            html += '         <option value="138">Mexico</option>';
            html += '         <option value="139">Micronesia,\x20Federated\x20States\x20of</option>';
            html += '         <option value="140">Moldova,\x20Republic\x20of</option>';
            html += '         <option value="141">Monaco</option>';
            html += '         <option value="142">Mongolia</option>';
            html += '         <option value="242">Montenegro</option>';
            html += '         <option value="143">Montserrat</option>';
            html += '         <option value="144">Morocco</option>';
            html += '         <option value="145">Mozambique</option>';
            html += '         <option value="146">Myanmar</option>';
            html += '         <option value="147">Namibia</option>';
            html += '         <option value="148">Nauru</option>';
            html += '         <option value="149">Nepal</option>';
            html += '         <option value="150">Netherlands</option>';
            html += '         <option value="151">Netherlands\x20Antilles</option>';
            html += '         <option value="152">New\x20Caledonia</option>';
            html += '         <option value="153">New\x20Zealand</option>';
            html += '         <option value="154">Nicaragua</option>';
            html += '         <option value="155">Niger</option>';
            html += '         <option value="156">Nigeria</option>';
            html += '         <option value="157">Niue</option>';
            html += '         <option value="158">Norfolk\x20Island</option>';
            html += '         <option value="112">North\x20Korea</option>';
            html += '         <option value="159">Northern\x20Mariana\x20Islands</option>';
            html += '         <option value="160">Norway</option>';
            html += '         <option value="161">Oman</option>';
            html += '         <option value="162">Pakistan</option>';
            html += '         <option value="163">Palau</option>';
            html += '         <option value="247">Palestinian\x20Territory,\x20Occupied</option>';
            html += '         <option value="164">Panama</option>';
            html += '         <option value="165">Papua\x20New\x20Guinea</option>';
            html += '         <option value="166">Paraguay</option>';
            html += '         <option value="167">Peru</option>';
            html += '         <option value="168">Philippines</option>';
            html += '         <option value="169">Pitcairn</option>';
            html += '         <option value="170">Poland</option>';
            html += '         <option value="171">Portugal</option>';
            html += '         <option value="172">Puerto\x20Rico</option>';
            html += '         <option value="173">Qatar</option>';
            html += '         <option value="174">Reunion</option>';
            html += '         <option value="175">Romania</option>';
            html += '         <option value="176">Russian\x20Federation</option>';
            html += '         <option value="177">Rwanda</option>';
            html += '         <option value="178">Saint\x20Kitts\x20and\x20Nevis</option>';
            html += '         <option value="179">Saint\x20Lucia</option>';
            html += '         <option value="180">Saint\x20Vincent\x20and\x20the\x20Grenadines</option>';
            html += '         <option value="181">Samoa</option>';
            html += '         <option value="182">San\x20Marino</option>';
            html += '         <option value="183">Sao\x20Tome\x20and\x20Principe</option>';
            html += '         <option value="184">Saudi\x20Arabia</option>';
            html += '         <option value="185">Senegal</option>';
            html += '         <option value="243">Serbia</option>';
            html += '         <option value="186">Seychelles</option>';
            html += '         <option value="187">Sierra\x20Leone</option>';
            html += '         <option value="188">Singapore</option>';
            html += '         <option value="189">Slovak\x20Republic</option>';
            html += '         <option value="190">Slovenia</option>';
            html += '         <option value="191">Solomon\x20Islands</option>';
            html += '         <option value="192">Somalia</option>';
            html += '         <option value="193">South\x20Africa</option>';
            html += '         <option value="194">South\x20Georgia\x20\x26amp\x3B\x20South\x20Sandwich\x20Islands</option>';
            html += '         <option value="113">South\x20Korea</option>';
            html += '         <option value="248">South\x20Sudan</option>';
            html += '         <option value="195">Spain</option>';
            html += '         <option value="196">Sri\x20Lanka</option>';
            html += '         <option value="249">St.\x20Barthelemy</option>';
            html += '         <option value="197">St.\x20Helena</option>';
            html += '         <option value="250">St.\x20Martin\x20\x28French\x20part\x29</option>';
            html += '         <option value="198">St.\x20Pierre\x20and\x20Miquelon</option>';
            html += '         <option value="199">Sudan</option>';
            html += '         <option value="200">Suriname</option>';
            html += '         <option value="201">Svalbard\x20and\x20Jan\x20Mayen\x20Islands</option>';
            html += '         <option value="202">Swaziland</option>';
            html += '         <option value="203">Sweden</option>';
            html += '         <option value="204">Switzerland</option>';
            html += '         <option value="205">Syrian\x20Arab\x20Republic</option>';
            html += '         <option value="206">Taiwan</option>';
            html += '         <option value="207">Tajikistan</option>';
            html += '         <option value="208">Tanzania,\x20United\x20Republic\x20of</option>';
            html += '         <option value="209">Thailand</option>';
            html += '         <option value="210">Togo</option>';
            html += '         <option value="211">Tokelau</option>';
            html += '         <option value="212">Tonga</option>';
            html += '         <option value="213">Trinidad\x20and\x20Tobago</option>';
            html += '         <option value="255">Tristan\x20da\x20Cunha</option>';
            html += '         <option value="214">Tunisia</option>';
            html += '         <option value="215">Turkey</option>';
            html += '         <option value="216">Turkmenistan</option>';
            html += '         <option value="217">Turks\x20and\x20Caicos\x20Islands</option>';
            html += '         <option value="218">Tuvalu</option>';
            html += '         <option value="219">Uganda</option>';
            html += '         <option value="220">Ukraine</option>';
            html += '         <option value="221">United\x20Arab\x20Emirates</option>';
            html += '         <option value="222">United\x20Kingdom</option>';
            html += '         <option value="223">United\x20States</option>';
            html += '         <option value="224">United\x20States\x20Minor\x20Outlying\x20Islands</option>';
            html += '         <option value="225">Uruguay</option>';
            html += '         <option value="226">Uzbekistan</option>';
            html += '         <option value="227">Vanuatu</option>';
            html += '         <option value="228">Vatican\x20City\x20State\x20\x28Holy\x20See\x29</option>';
            html += '         <option value="229">Venezuela</option>';
            html += '         <option value="230">Viet\x20Nam</option>';
            html += '         <option value="231">Virgin\x20Islands\x20\x28British\x29</option>';
            html += '         <option value="232">Virgin\x20Islands\x20\x28U.S.\x29</option>';
            html += '         <option value="233">Wallis\x20and\x20Futuna\x20Islands</option>';
            html += '         <option value="234">Western\x20Sahara</option>';
            html += '         <option value="235">Yemen</option>';
            html += '         <option value="238">Zambia</option>';
            html += '         <option value="239">Zimbabwe</option>';
            html += '      </select></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '">省份/自治（州）/直辖（市）</label>';
    html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value=""> --- None --- </option></select></div>';
    html += '  </div>';

    // Custom Fields
    
    html += '  <div class="form-group">';
    html += '    <label class="col-sm-2 control-label">默认地址</label>';
    html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="' + address_row + '" /></label></div>';
    html += '  </div>';

    html += '</div>';

    $('#tab-general .tab-content').append(html);

    $('select[name=\'customer_group_id\']').trigger('change');

    $('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');

    $('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> 地址 ' + address_row + '</a></li>');

    $('#address a[href=\'#tab-address' + address_row + '\']').tab('show');

    $('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {
      $('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);
    }
    
    if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {
      $('#tab-address' + address_row + ' .form-group:last').after(this);
    }
    
    if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {
      $('#tab-address' + address_row + ' .form-group:first').before(this);
    }
    });

    address_row++;
  }
</script>
<script type="text/javascript">
  function country(element, index, zone_id) {
    $.ajax({
      url: '/admin/country?country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);
      },
      complete: function() {
        $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          $('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');
        } else {
          $('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');
        }

        html = '<option value=""> --- Please Select --- </option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value="' + json['zone'][i]['zone_id'] + '"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected="selected"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value="0"> --- None --- </option>';
        }

        $('select[name=\'address[' + index + '][zone_id]\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  }

  $('select[name$=\'[country_id]\']').trigger('change');

</script>
<script type="text/javascript">

  $('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#history').load(this.href);
  });

  $('#history').load('index.php?route=customer/customer/history&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

  $('#button-history').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: '',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),
      beforeSend: function() {
        $('#button-history').button('loading');
      },
      complete: function() {
        $('#button-history').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"><i></i>' + json['error'] + '<button class="close" data-dismiss="alert" type="button">&times;</button><div></div>');
        }

        if (json['success']) {
          $('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>' + json['success'] + '<button class="close" data-dismiss="alert" type="button">&times;</button></div>');

          $('#history').load('index.php?route=customer/customer/history&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

          $('#tab-history textarea[name=\'comment\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

</script>
<script type="text/javascript">

  $('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#transaction').load(this.href);
  });

  $('#transaction').load('index.php?route=customer/customer/transaction&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

  $('#button-transaction').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: '',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),
      beforeSend: function() {
        $('#button-transaction').button('loading');
      },
      complete: function() {
        $('#button-transaction').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"><i></i>' + json['error'] + '<button class="close" data-dismiss="alert" type="button">&times;</button><div></div>');
        }

        if (json['success']) {
          $('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>' + json['success'] + '<button class="close" data-dismiss="alert" type="button">&times;</button></div>');

          $('#transaction').load('index.php?route=customer/customer/transaction&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

          $('#tab-transaction input[name=\'amount\']').val('');
          $('#tab-transaction input[name=\'description\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

</script>
<script type="text/javascript">

  $('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#reward').load(this.href);
  });

  $('#reward').load('');

  $('#button-reward').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: '',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),
      beforeSend: function() {
        $('#button-reward').button('loading');
      },
      complete: function() {
        $('#button-reward').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"><i></i>' + json['error'] + '<button class="close" data-dismiss="alert" type="button">&times;</button><div></div>');
        }

        if (json['success']) {
          $('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>' + json['success'] + '<button class="close" data-dismiss="alert" type="button">&times;</button></div>');

          $('#reward').load('index.php?route=customer/customer/reward&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

          $('#tab-reward input[name=\'points\']').val('');
          $('#tab-reward input[name=\'description\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

  $('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#ip').load(this.href);
  });

  $('#ip').load('index.php?route=customer/customer/ip&user_token=CeO560kvOtNEZjScl8KtYhES0PiSTw2Y&customer_id=1');

  $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {
    var node = this;

    $('#form-upload').remove();

    $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input name="file" type="file"/></form>');

    $('#form-upload input[name=\'file\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if ($('#form-upload input[name=\'file\']').val() != '') {
        clearInterval(timer);

        $.ajax({
          url: '',
          type: 'post',
          dataType: 'json',
          data: new FormData($('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            $(node).button('loading');
          },
          complete: function() {
            $(node).button('reset');
          },
          success: function(json) {
            $(node).parent().find('.text-danger').remove();

            if (json['error']) {
              $(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              $(node).parent().find('input[type=\'hidden\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            // alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  // Sort the custom fields
    
  $('#tab-customer .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {
      $('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);
    }

    if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {
      $('#tab-customer .form-group:last').after(this);
    }

    if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {
      $('#tab-customer .form-group:first').before(this);
    }
  });

  $('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group').eq($(this).attr('data-sort')).before(this);
    }

    if ($(this).attr('data-sort') > $('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group:last').after(this);
    }

    if ($(this).attr('data-sort') < -$('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group:first').before(this);
    }
  });
</script>
<script type="text/javascript">
  $('input[name=\'payment\']').on('change', function() {
    $('.payment').hide();

    $('#payment-' + this.value).show();
  });

  $('input[name=\'payment\']:checked').trigger('change');
</script>
@endsection