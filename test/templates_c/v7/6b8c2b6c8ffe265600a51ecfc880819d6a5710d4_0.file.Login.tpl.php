<?php
/* Smarty version 4.5.5, created on 2026-08-30 07:06:08
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Users/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a93d660615c49_04986756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b8c2b6c8ffe265600a51ecfc880819d6a5710d4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Users/Login.tpl',
      1 => 1788073565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a93d660615c49_04986756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/modern/css/login.css");?>
'><span class="app-nav"></span><div class="split"><div class="brand"><div class="brand-mark"><span class="dot"></span> VTIGER</div><div class="brand-copy"><h1>Every deal, moving forward.</h1><p>Track pipeline, close faster, and keep your whole team looking at the same truth.</p></div><div class="brand-foot"><?php if ($_smarty_tpl->tpl_vars['JSON_DATA']->value) {
$_smarty_tpl->_assignInScope('ALL_BLOCKS_COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSON_DATA']->value, 'BLOCKS_DATA', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['BLOCKS_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value) {
$_smarty_tpl->tpl_vars['BLOCKS_DATA']->do_else = false;
if ($_smarty_tpl->tpl_vars['BLOCKS_DATA']->value) {?><div class="mkt-block"><h4><?php echo $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value[0]['heading'];?>
</h4><div class="mkt-slides"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS_DATA']->value, 'BLOCK_DATA', false, NULL, 'slideLoop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['BLOCK_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_DATA']->value) {
$_smarty_tpl->tpl_vars['BLOCK_DATA']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_slideLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_slideLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_slideLoop']->value['index'];
$_smarty_tpl->_assignInScope('ALL_BLOCKS_COUNT', $_smarty_tpl->tpl_vars['ALL_BLOCKS_COUNT']->value+1);?><div class="mkt-slide<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slideLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slideLoop']->value['first'] : null)) {?> active<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['summary'];?>
"><?php if ($_smarty_tpl->tpl_vars['BLOCK_DATA']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['image'];?>
"><?php }?><h3><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['displayTitle'];?>
</h3><a href="<?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['BLOCK_DATA']->value['urlalt'];?>
</a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="inactive-promo"><h4>Get more out of Vtiger with extensions from Vtiger Marketplace</h4><a href="https://marketplace.vtiger.com/app/listings" target="_blank"><img src="layouts/v7/resources/Images/extensionstore.png"></a></div><?php }?><div style="margin-top:16px;">&copy; 2026 Your Company &middot; vtiger CRM</div></div></div><div class="formside"><div class="formcard"><div id="loginFormDiv"><h2>Sign in</h2><div class="sub">Welcome back &mdash; enter your details to continue.</div><span class="<?php if (!$_smarty_tpl->tpl_vars['ERROR']->value) {?>hide<?php }?> err" id="validationMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span><span class="<?php if (!$_smarty_tpl->tpl_vars['MAIL_STATUS']->value) {?>hide<?php }?> ok"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span><form class="form-horizontal" method="POST" action="index.php"><input type="hidden" name="module" value="Users"/><input type="hidden" name="action" value="Login"/><div class="field"><label for="username">Username</label><input id="username" type="text" name="username" placeholder="your.name"></div><div class="field"><label for="password">Password</label><input id="password" type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"></div><?php $_smarty_tpl->_assignInScope('CUSTOM_SKINS', Vtiger_Theme::getAllSkins());
if (!empty($_smarty_tpl->tpl_vars['CUSTOM_SKINS']->value)) {?><div class="field"><label for="skin">Skin</label><select id="skin" name="skin" class="skin-select"><option value="">Default Skin</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_SKINS']->value, 'CUSTOM_SKIN');
$_smarty_tpl->tpl_vars['CUSTOM_SKIN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_SKIN']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_SKIN']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><div class="row-between"><span></span><a href="#" class="forgotPasswordLink forgot-link">Forgot password?</a></div><button type="submit" class="btn-signin">Sign in</button></form><div class="foot-note">Trouble signing in? Contact your administrator.</div></div><div id="forgotPasswordDiv" class="hide"><h2>Reset password</h2><div class="sub">We&rsquo;ll email you a reset link.</div><form class="form-horizontal" action="forgotPassword.php" method="POST"><div class="field"><label for="fusername">Username</label><input id="fusername" type="text" name="username" placeholder="your.name"></div><div class="field"><label for="email">Email</label><input id="email" type="email" name="emailId" placeholder="you@company.com"></div><button type="submit" class="btn-signin forgot-submit-btn">Send reset link</button></form><div class="foot-note"><a href="#" class="forgotPasswordLink forgot-link">Back to sign in</a></div></div></div></div></div><?php echo '<script'; ?>
>
		jQuery(document).ready(function () {
			var validationMessage = jQuery('#validationMessage');
			var forgotPasswordDiv = jQuery('#forgotPasswordDiv');
			var loginFormDiv = jQuery('#loginFormDiv');

			loginFormDiv.find('#username').focus();

			jQuery('.forgotPasswordLink').on('click', function (e) {
				e.preventDefault();
				loginFormDiv.toggleClass('hide');
				forgotPasswordDiv.toggleClass('hide');
				validationMessage.addClass('hide');
			});

			loginFormDiv.find('button').on('click', function () {
				var username = loginFormDiv.find('#username').val();
				var password = jQuery('#password').val();
				var result = true;
				var errorMessage = '';
				if (username === '') {
					errorMessage = 'Please enter valid username';
					result = false;
				} else if (password === '') {
					errorMessage = 'Please enter valid password';
					result = false;
				}
				if (errorMessage) {
					validationMessage.removeClass('hide').text(errorMessage);
				}
				return result;
			});

			forgotPasswordDiv.find('button').on('click', function () {
				var username = jQuery('#forgotPasswordDiv #fusername').val();
				var email = jQuery('#email').val();
				var email1 = email.replace(/^\s+/, '').replace(/\s+$/, '');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;
				var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;

				var result = true;
				var errorMessage = '';
				if (username === '') {
					errorMessage = 'Please enter valid username';
					result = false;
				} else if (!emailFilter.test(email1) || email == '') {
					errorMessage = 'Please enter valid email address';
					result = false;
				} else if (email.match(illegalChars)) {
					errorMessage = 'The email address contains illegal characters.';
					result = false;
				}
				if (errorMessage) {
					validationMessage.removeClass('hide').text(errorMessage);
				}
				return result;
			});

			/* lightweight marketing slide rotation, replaces bxSlider */
			jQuery('.mkt-slides').each(function () {
				var slides = jQuery(this).find('.mkt-slide');
				if (slides.length < 2) return;
				var idx = 0;
				setInterval(function () {
					slides.eq(idx).removeClass('active');
					idx = (idx + 1) % slides.length;
					slides.eq(idx).addClass('active');
				}, 4000);
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
