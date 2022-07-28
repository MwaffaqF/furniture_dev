/**
 * Application configuration declaration.
 *
 * This configuration file is shared between the website and the build script so
 * that values don't have to be duplicated across environments. Any non-shared,
 * environment-specific configuration should placed in appropriate configuration
 * files.
 *
 * Paths to vendor libraries may be added here to provide short aliases to
 * otherwise long and arbitrary paths. If you're using bower to manage vendor
 * scripts, running `grunt inject` will automatically add paths aliases as
 * needed.
 *
 * @example
 *     paths: {
 *         'jquery': '../vendor/jquery/jquery',
 *         'jquery-cookie': '../vendor/jquery-cookie/jquery-cookie'
 *     }
 *
 * Shims provide a means of managing dependencies for non-modular, or non-AMD
 * scripts. For example, jQuery UI depends on jQuery, but it assumes jQuery is
 * available globally. Because RequireJS loads scripts asynchronously, jQuery
 * may or may not be available which will cause a runtime error. Shims solve
 * this problem.
 *
 * @example
 *     shim: {
 *         'jquery-cookie': {
 *             deps: ['jquery'],
 *             exports: null
 *          }
 *     }
 */
require.config({
    paths: {
        requirejs: '../vendor/requirejs/require',
        jquery: '../vendor/jquery/jquery',
        'nerdery-function-bind': '../vendor/nerdery-function-bind/index',
        'nerdery-request-animation-frame': '../vendor/nerdery-request-animation-frame/index',
        picturefill: '../vendor/picturefill/dist/picturefill',
        'nerdery-has-js': '../vendor/nerdery-has-js/index',
        fastclick: '../vendor/fastclick/lib/fastclick',
        'jquery.panzoom': '../vendor/jquery.panzoom/dist/jquery.panzoom',
        hammerjs: '../vendor/hammerjs/hammer',
        EventEmitter: '../vendor/EventEmitter.js/EventEmitter',
        handlebarsCore: '../vendor/handlebars/handlebars',
        handlebars: 'helpers/Helpers',
        'handlebars.runtime': '../vendor/handlebars/handlebars.runtime',
        velocity: '../vendor/velocity/velocity',
        'velocity.ui': '../vendor/velocity/velocity.ui',
        jsondiffpatch: '../vendor/jsondiffpatch/public/build/jsondiffpatch',
        'jquery-deparam': '../vendor/jquery-deparam/jquery-deparam',
        nouislider: '../vendor/nouislider/distribute/jquery.nouislider.all.min',
        'jquery.scrollbar': '../vendor/jquery.scrollbar/jquery.scrollbar',
        'jquery.lazyload': '../vendor/jquery.lazyload/jquery.lazyload',
        'jquery.scrollstop': '../vendor/jquery.lazyload/jquery.scrollstop',
        'jquery.validate': '../vendor/jquery-validation/jquery.validate-1.13.0',
        'jquery.validate.unobtrusive': '../vendor/jquery-validation/jquery.validate.unobtrusive-2.0.30506',
        'jquery.validators.conditionallyrequired': '../vendor/jquery-validation/jquery.validators.conditionallyrequired',
        'jquery.validators.custom-required': '../vendor/jquery-validation/jquery.validators.custom-required',
        'jquery-ui': '../vendor/jquery-ui/ui',
        'jquery.adobe.autocomplete': '../vendor/adobe/jquery.adobe.autocomplete.min'
    },
    shim: {
        velocity: {
            deps: [
                'jquery'
            ]
        },
        App: {
            deps: [
                'jquery.validate.unobtrusive',
                'jquery.validators.conditionallyrequired'
            ]
        },
        'helpers/JqueryValidateScroll': {
            deps: [
                'jquery.validate'
            ]
        },
        'jquery.validate': {
            deps: [
                'jquery'
            ]
        },
        'jquery.validate.unobtrusive': {
            deps: [
                'jquery.validate'
            ]
        },
        'jquery.validators.conditionallyrequired': {
            deps: [
                'jquery.validate.unobtrusive'
            ]
        },
        'jquery.validators.custom-required': {
            deps: [
                'jquery.validate.unobtrusive'
            ]
        },
        'handlebarsCore': {
            exports: 'Handlebars'
        },
        'handlebars': {
            deps: ['handlebarsCore'],
            exports: 'Handlebars'
        },
    },
    waitSeconds: 120,
    packages: [

    ]
});

/**
 * Module definitions for pre-loaded scripts.
 */
