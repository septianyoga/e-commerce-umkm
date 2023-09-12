<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('product/(:num)', 'Home::product/$1');

// page admin
$routes->get('admin', 'Admin::index');

// page auth
$routes->get('auth', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/regist', 'Auth::regist');
$routes->post('auth/daftar', 'Auth::daftar');
$routes->get('auth/getProv', 'Auth::getProvinsi');
$routes->get('auth/getKota', 'Auth::getKota');
$routes->get('auth/edit_alamat', 'Auth::editAlamat');
$routes->post('auth/edit_alamat', 'Auth::prosesEdit');

// page produk
$routes->get('produk', 'Produk::index');
$routes->get('produk/tambah_produk', 'Produk::tambah_produk');
$routes->post('produk/add', 'Produk::add');
$routes->get('produk/(:num)', 'Produk::detail_produk/$1');
$routes->get('produk/(:num)/ubah', 'Produk::ubah_produk/$1');
$routes->post('produk/edit/(:num)', 'Produk::edit/$1');
$routes->get('produk/(:num)/hapus', 'Produk::hapus_produk/$1');

// page cart
$routes->get('cart', 'Cart::index');
$routes->post('cart/add', 'Cart::add');
$routes->get('cart/get', 'Cart::get');
$routes->get('cart/getAll', 'Cart::getAll');
$routes->get('cart/(:num)/del', 'Cart::delete/$1');

// page checkout
$routes->get('checkout', 'Checkout::index');

// page payment
$routes->post('payment', 'Payment::index');
$routes->post('payment/pending', 'Payment::pending');
$routes->post('payment/pay', 'Payment::pay');
$routes->get('payment/redirect', 'Payment::direct');

// page cek ongkir
$routes->get('cekongkir', 'CekOngkir::index');
$routes->post('cekongkir/getCost', 'CekOngkir::getCost');
$routes->get('cekongkir/(:num)', 'CekOngkir::getKota/$1');

// page order
$routes->post('order', 'Order::insertOrder');
$routes->get('order', 'Order::index');
$routes->get('order/(:segment)/detail', 'Order::detail/$1');
$routes->get('order/tes', 'Order::autoUbahStatus');
$routes->post('order/updateExpired', 'Order::updateExpired');

// page paket reseller
$routes->get('paketreseller', 'PaketReseller::index');

// page pesanan
$routes->get('pesanan', 'Pesanan::index');
$routes->get('pesanan/(:segment)/approv', 'Pesanan::approv/$1');
$routes->post('pesanan/(:segment)/updateResi', 'Pesanan::updateResi/$1');
$routes->get('pesanan/(:segment)', 'Pesanan::detail/$1');

// page laporan
$routes->get('laporan', 'Laporan::index');
$routes->post('laporan/cetak', 'Laporan::cetak');

// page about
$routes->get('about', 'Home::about');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
