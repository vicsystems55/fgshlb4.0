<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use App\ApplicationStage;

use App\LoanzApplication;

class ApplicationStageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id = Auth::user()->id;
        
        $application_stage = LoanzApplication::where('user_id', $user_id)->first();

        if($application_stage && $application_stage->status=="submitted"){



            return redirect('/loan_success');
            
            }

            else{

               

                return $next($request); 
            }



                 if($application_stage && $application_stage->status=="Stage2"){



                return redirect('/loan_success');
                
                }
    
                else{
    
                   
    
                    return $next($request); 
                }

                if($application_stage && $application_stage->status=="Stage3"){



                    return redirect('/loan_success');
                    
                    }
        
                    else{
        
                       
        
                        return $next($request); 
                    }


                
    }
}
