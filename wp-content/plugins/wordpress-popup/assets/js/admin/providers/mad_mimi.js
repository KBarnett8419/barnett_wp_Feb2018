(function($){
	'use strict';

	Optin.Mixins.add_services_mixin( 'mad_mimi', function( content_view ) {
		return new Optin.Provider({
			id: 'mad_mimi',
			provider_args: { enabled: 0 },
			default_data: {
				enabled: false,
				api_key: '',
				username : ''
			},
			errors: {
				email_list: {
					name: 'email_provider_lists',
					iconClass: 'dashicons-warning-account_name'
				}
			},
			show_selected: function() {

				content_view.service_supports_fields = false;
				
				// if not the service being edited do not proceed
				if ( content_view.editing_service !== this.id ) {
					return;
				}

				var email_services = content_view.model.get('email_services'),
					$selected_list = $('#optin-provider-account-selected-list'),
					$label = $selected_list.find('.wpmudev-label--notice span');
				if ( 'mad_mimi' in email_services ) {
					var list_name = ( 'list_name' in email_services.mad_mimi )
						? email_services.mad_mimi.list_name
						: '';
					
					if ( $label.length ) {
						$label.html( $label.text().replace( 'campaign', '<strong>' + list_name + '</strong>' ) )
					}
					
					if ( typeof email_services.mad_mimi.api_key !== 'undefined' ) {
						setTimeout(function(){
							$('input[name="optin_api_key"]').attr( 'value', email_services.mad_mimi.api_key ) ;
						}, 500);
					}

					if ( typeof email_services.mad_mimi.username !== 'undefined' ) {
						setTimeout(function(){
							$('input[name="optin_username"]').attr( 'value', email_services.mad_mimi.username ) ;
						}, 500);
					}
				}
				
			},
			update_args: function(view) {
				
				// if not the service being edited do not proceed
				if ( view.editing_service !== this.id ) {
					return;
				}
				
				// if not updated do not save
				if ( !view.is_service_modal_updated ) {
					view.service_modal.close_modal();
					return;
				}
					
				var api_key = $('input[name="optin_api_key"]').val(),
					username = $('input[name="optin_username"]').val(),
					enabled = view.model.get('email_services').mad_mimi ? view.model.get('email_services').mad_mimi.enabled : false,
					$list = $('select[name="optin_email_list"]'),
					list_id = $list.val(),
					list_name = $list.find('option:selected').text();
					
				var current_args = {
						api_key: api_key,
						username: username,
						enabled: enabled,
						list_id: list_id,
						list_name: list_name,
						desc: api_key
					},
					args = _.extend( view.mad_mimi.provider_args, current_args );
				
				view.mad_mimi.provider_args = args;
				Hustle.Events.trigger("optin.service.saved", view);
			},
			init: function() {
				var me = this,
					view = content_view;
				
				Hustle.Events.on( 'optin.service.prepare', $.proxy( this.update_args, this ) );
				Hustle.Events.on( 'optin.service.show.selected', $.proxy( this.show_selected, this ) );
			}
		});
	});

}(jQuery,document));
