<?php
/**
 * The style "default" of the Supertitle
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.6.49
 */

?><#
var header_column = Math.max(0, Math.min(11, settings.header_column.size));
var column_class = "<?php echo esc_attr(trx_addons_get_column_class('##', 12)); ?>";
var icon_type = settings.image !== '' &&  settings.image.url !== '' 
					? 'image' 
					: (settings.icon !== '' && settings.icon !== 'none' 
						? 'icon' 
						: 'no_icon');
var has_side = false;
_.each(settings.items, function(item) {
	if (item.align === 'right') has_side = true;
});
#><div class="sc_supertitle sc_supertitle_{{ settings.type }}">
	<div class="sc_supertitle_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
		<div class="<# print(column_class.replace('##', 1)); if (icon_type ==='no_icon' ) print(' sc_supertitle_icon_empty_column'); #>">
			<div class="sc_supertitle_media_block">
				<#
				if (icon_type === 'image') {
					#><img class="sc_icon_as_image" src="{{ settings.image.url }}" ><#
				} else if (icon_type === 'icon') {
					#><span <#
						if (settings.icon !== '') print(' class="sc_icon_type_icons ' + settings.icon +'"');
						if (settings.icon_size.size !== '') print(' style="font-size:' + settings.icon_size.size + settings.icon_size.unit + ';"');
					#>></span><#
				} else {
					#><span class="sc_supertitle_no_icon"></span><#
				}
				#>
			</div>
		</div><#
		if (header_column > 0) {
			if (has_side) {
				#><div class="sc_supertitle_left_column <# print(column_class.replace('##', header_column)); #>"><#
			} else {
				#><div class="sc_supertitle_left_column <# print(column_class.replace('##', '11')); #>"><#
			}
				trx_addons_sc_supertitle_show_items('left');
			#></div><#
		}
		if (has_side && header_column < 11) {
			#><div class="sc_supertitle_right_column <# print(column_class.replace('##', 11 - header_column)); #>"><#
				trx_addons_sc_supertitle_show_items('right');
			#></div><#
		}
		#>
	</div>
</div><#
// Display items in the left and right columns
function trx_addons_sc_supertitle_show_items(side) {
	_.each(settings.items, function(item) {
		if (item.align != side) return;
		if (item.item_type === 'text') {
			if (item.text !== '') {
				#><{{ item.tag }} class="sc_supertitle_text <# if (item.inline == '1') print('sc_supertitle_display_inline'); #>"<#
					if (item.color !== '') print( ' style="color: ' + item.color + '"');
				#>><#
					if (item.link.url !== '') {
						#><a href="{{ item.link.url }}" <# if (item.color !== '') print( ' style="color: '+ item.color +'"'); #>><#
					}
					print(item.text);
					if (item.link.url !== '') {
						#></a><#
					}
				#></{{ item.tag }}><#
			}
		} else if (item.item_type === 'media') {
			if (item.media !== '') {
				#><div class="sc_supertitle_media sc_supertitle_position_{{ item.float_position }} <# if (item.inline == '1') print('sc_supertitle_display_inline'); #>">
					<img src="{{ item.media.url }}">
				</div><#
			}
		} else if (item.item_type === 'icon') {
			if (item.item_icon !== '') {
				#><div class="sc_supertitle_icon sc_supertitle_position_{{ item.float_position }} <# if (item.inline == '1') print('sc_supertitle_display_inline'); #>">
					<span class="sc_icon_type_icons {{ item.item_icon }}"  style="<#
						if (item.color !== '') print( 'color:' + item.color + ';');
						if (item.size.size !== '') print( 'font-size:' + item.size.size + item.size.unit + ';');
					#>"></span>
				</div><#
			}
		}
	});
}
#>