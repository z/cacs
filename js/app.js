require.config({
    baseUrl: 'js/lib',
    
    paths: {
        jquery: 'jquery',
        datatables: 'jquery.dataTables.min',
        dtbootstrap: 'dataTables.bootstrap',
        transition: 'transition',
        collapse: 'collapse',
    },
    shim: {
        datatables: {
            deps: ['jquery']
        },
        dtbootstrap: {
            deps: ['datatables']
        },
        transition: {
            deps: ['dtbootstrap']
        },
        collapse: {
            deps: ['dtbootstrap']
        }
    }
});

requirejs(['../app/main']);
