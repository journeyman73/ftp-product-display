( function ( blocks, editor, i18n, element, components, _ ) {
    const __ = i18n.__;
    const el = element.createElement;

    blocks.registerBlockType('ftp-product-display/products', {
        title: __('FTP Product Display Block', 'ftp-product-display'),
        icon: 'align-full-width',
        category: 'layout',
        attributes: {},
        edit: function ( props ) {

            return [
                el(
                    'div',
                    {
                        className: props.className
                    },
                    el(
                        'div',
                        {
                            key: 'placeholder',
                            className: 'placeholder-block',
                        },
                        el(
                            'p',
                            {},
                            'Product Display Placeholder'
                        )
                    )
                )
            ]
        },
        save: function ( ) {
            return null
        },
    });
} )(
    window.wp.blocks,
    window.wp.blockEditor,
    window.wp.i18n,
    window.wp.element,
    window.wp.components,
    window._
);