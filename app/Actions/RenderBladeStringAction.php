<?php

namespace App\Actions;

use Symfony\Component\Debug\Exception\FatalThrowableError;

class RenderBladeStringAction
{
    public function execute(?string $blade_string, array $data=[])
    {
        $data['___env1']=app(\Illuminate\View\Factory::class);
        // dd($data);

        $php =\Blade::compileString($blade_string);
        // dd($php);
        $obLevel=ob_get_level();//Returns a number indicating how many output buffers are on the stack
        // dd($obLevel);
        ob_start();//Creates a new output buffer and adds it to the top of the stack
        // dd(extract($data, EXTR_SKIP));
        extract($data, EXTR_SKIP);//Returns  the number of variables extracted on success
        try {
            eval('?>'.$php);
        } catch (\Exception $e) {
            while (ob_get_level() > $obLevel) {
                ob_get_clean();//Returns all of the contents of the topmost output buffer and clears the buffer
            }
            throw $e;
        }

        // If we caught an exception, we'll silently flush the output
        // buffer so that no partially rendered views get thrown out
        // to the client and confuse the user with junk.
        catch (\Throwable $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();//Deletes the topmost output buffer and all of its contents
            }
            throw new FatalThrowableError($e);
        }
        // dd(ob_get_clean());
        return ob_get_clean();
        // return ob_end_clean();
    }
}
