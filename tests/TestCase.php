<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /*public static function writeRoutes()
    {
        $cotroller_parent = 'BaseController@filter';
        $cotroller_sub = 'BaseController@product';
        $category = self::getMenuData(0);
        $data[] = "<?php";
        foreach ($category as $row) {
            $data[] = "Route::get('". $row['name'] . "/{slug}/{id}' , '". $cotroller_parent ."');";
            foreach ($row['sub_cat'] as $sub_cat) {
                $data[] = "Route::get('". $sub_cat['name'] ."/{slug}/{id}' , '". $cotroller_sub ."');";
            }
        }
        $output = implode("\n", $data);
        $file = app_path().'/Http/Routes/routes.php';
        $bytes_written = File::put($file, $output);
        if ($bytes_written === false)
        {
            die("Error writing to file");
        }
    } */
}
