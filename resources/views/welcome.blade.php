@extends('layouts.main')
@section('content')



<main class="py-5">
    
    <div class="container">
        <h1 class="h5 mb-3">
          <a  href="/Panel_de_Control" class="btn btn-sm btn-success" title="Panel de Control">

            Bienvenido </a>
            <small class="text-muted">{{ auth()->user()->name }}</small>
        </h1>
        @if(Session::has('error_exist'))
        <div class="alert alert-success">
            {{Session::get('error_exist')}}
        </div>
        @endif


       


      <div class="row">
        <div class="col-md-12">

          <div class="card">
              <div class="card-header card-title">
                <div class="d-flex align-items-center">
                  <h2 class="mb-0">Polizas en Gestión</h2>
                  <div class="ml-auto">
                     
                    @role('Admin')
                    <a href="{{route('actualizar_impuestos')}}" class="btn btn-sm btn-circle btn-success" title="Actualizar Impuesto" >@include('iconos.impuesto')</a>
                    @endrole

                    @role('Admin')  

                    <a  href="{{route('gestionar_coberturas')}}" class="btn btn-sm btn-circle btn-success" title="Gestionar Coberturas">  @include('iconos.gestionarcobertura_icon')</a>

                    <a href="{{route('gestionar_usuarios')}}" class="btn btn-sm btn-circle btn-success" title="Gestionar Usuarios">  @include('iconos.gestionarusuarios_icon')
                    </a>


                    <a href="{{route('files.index')}}" class="btn btn-sm btn-circle btn-success" title="Gestionar Firmas">  @include('iconos.gestionarusuarios_icon')
                    </a>
                 
                    
                    <a href="{{route('gestionar_aseguradora')}}" class="btn btn-sm btn-circle btn-success" title="Gestionar Aseguradora">  @include('iconos.aseguradora')</a>
                   
                    @endrole
                    @role('Adquisiciones')  
                    <a href="{{route('crear')}}" class="btn btn-success" title="Agregar Ordenes | Admin"><i class="fa fa-plus-circle"></i> Agregar</a>
                    @endrole
                  </div>
                </div>
              </div>
              
            <div class="card-body">
   
              <table class="table table-striped table-hover">
                <thead>
            
                  <tr>
                    <th scope="col">#</th>
                   
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Elaboración</th>
                    @role('Contratos')  
                  <th scope="col">Total</th> 
                  @endrole
                  @role('Admin')  
                  <th scope="col">Total</th> 
                  @endrole
                    <th scope="col">Opciones</th>
                    <th scope="col" style="
                    text-align: center;
                ">
                      
                      <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Alerts" >  @include('iconos.notificacion')</a>
                      
                      
                    </th>
                    <th scope="col">Estados</th>
                 
                  </tr>

                  
                </thead>
                <tbody>
                  <tr > 

                    <td colspan="8" >
                 <!-----------Polizas en gestion ------>  
                 @role('Super_Admin')
                 <h1>Usuario Admin</h1>
                 <p> Cordial Saludo, {{ auth()->user()->name }}</p>
            
              
               
      
               
               
                   <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                     @csrf
                     <button  class="btn btn-dark ">Salir</button>
                   </form>
                 </div>
                 @endrole
               
                @role('Invitado')
                <h1>Usuario Invitado</h1>
                <p> Cordial Saludo, {{ auth()->user()->name }}</p>
                <p>Muy pronto tu usuario será autorizado para contribuir en el proceso institucional de Gestión de Polizas según el nivel de seguridad y el perfil relacionado con tu cargo en la entidad.</p>
                <p>Recibiras un una notificaión vía correo electrónico con la confirmación</p>
                <p><h1>Gracias! Vuelve Pronto</h1>
              
     
              
                <div>
             
                  <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button  class="btn btn-dark ">Salir</button>
                  </form>
                </div>
                @endrole
                    </td>
                 
      
                 
                  </tr>


                  @role('Adquisiciones')
            <?php
            setlocale(LC_MONETARY,"de_DE");
            foreach ($datos2 as $id => $dato):?>
          
             <tr>

            <th scope="row"><p>{{$dato['order_number']}}</th>
            <td>    <p>{{$dato['order_nombre']}}</p></td>
            <td>    <p> {{substr($dato['order_fecha'], 0, 10) }}</p></td>
            <td>  
        
              @if($dato['order_estado'] != "Borrador")

              <a href="{{route('generatePDF-a',['order_number'=> $dato['order_number']   ])}}"  class="btn btn-sm btn-circle btn-outline-info" title="Descargar Anexo A">  @include('iconos.pdficon')</a>

          <a href="{{route('resumen_orden',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
          
          @else
          <a href="{{route('order.store_borrador',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
          @endif

             
            
            
            
       
            
  
           
            </td>
      
            <td   >      <a href="#" 
          
              class="
              
              @if(!in_array($dato['order_number'] ,$array_notifications))
              btn btn-sm btn-circle btn-outline-no-danger
           
          @else
          btn btn-sm btn-circle btn-outline-danger fa-pulse fa-spin
          @endif "
              
              
              
              title="Alerts" >  @include('iconos.notificacion_red')</a>
            
          
            
            
            </td>
            <td 
            class="
            
            @if($dato['order_estado'] == "En Proceso")
           yellow_status
            @endif
             @if($dato['order_estado'] == "Elaboración")
            green_status
             @endif   
             @if($dato['order_estado'] == "Cerrado")
             grey_status
              @endif  
              @if($dato['order_estado'] == "Aprobada")
              blue_status
               @endif  
               @if($dato['order_estado'] == "Borrador")
               orange_status
                @endif 
              "
              
             > 
             
             
   
             <p  >
               
               
               {{$dato['order_estado']}}</p>
           </td>
    
          </tr>
      


        
       
          <?php endforeach ?>

          @endrole
        

          @role('Contratos')
          <?php
          setlocale(LC_MONETARY,"de_DE");
          foreach ($datos2 as $id => $dato):?>
        
           <tr >

          <th scope="row"><p>{{$dato['order_number']}}</th>
          <td>    <p>{{$dato['order_nombre']}}</p></td>
          <td>    <p> {{substr($dato['order_fecha'], 0, 10) }}</p></td>
          <td>   <p>$ 
            {{ number_format( $dato['order_total'], 2, ',', '.') }}</p>
          </td>
      


          <td>
      
            @if($dato['order_estado'] != "Borrador")
            <a href="{{route('resumen_orden',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
       
            @else
            <a href="{{route('order.store_borrador',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
            @endif

           
          
            <a href="{{route('autorizar_orden',['order_number'=> $dato['order_number']   ])}}"   class="btn btn-sm btn-circle btn-outline-secondary" title="Aprobar"><i class="fa fa-edit"></i></a>

          
           
            <a href="{{route('gestionar_orden',['order_number'=> $dato['order_number']   ])}}"  class="btn btn-sm btn-circle btn-outline-secondary gestionar" title="gestionar"><i class="fa fa-edit"></i></a>

            @if($dato['order_estado'] == "Aprobada")
            <a href="{{route('generatePDF-b',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Descargar Aprobación"> @include('iconos.pdficon')</a>
            @endif
          
            @role('Admin')
            
            <a href="{{route('delete_orden',['order_number'=> $dato['order_number']   ])}}"class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
            @endrole
       
           
          
         
          </td>
    
          <td   >      <a href="#" 
          
            class="
            
            @if(!in_array($dato['order_number'] ,$array_notifications))
            btn btn-sm btn-circle btn-outline-no-danger
         
        @else
        btn btn-sm btn-circle btn-outline-danger fa-pulse fa-spin
        @endif "
            
            
            
            title="Alerts" >  @include('iconos.notificacion_red')</a>
          
        
          
          
          </td>
          <td 
          class="
          @if($dato['order_estado'] == "En Proceso")
         yellow_status
          @endif
           @if($dato['order_estado'] == "Elaboración")
          green_status
           @endif   
           @if($dato['order_estado'] == "Cerrado")
           grey_status
            @endif  
            @if($dato['order_estado'] == "Aprobada")
            blue_status
             @endif  
             @if($dato['order_estado'] == "Borrador")
             orange_status
              @endif 
            "
            
           > 
           
           
 
           <p  >
             
             
             {{$dato['order_estado']}}</p>
         </td>
          </td>
  
        </tr>
    


      
     
        <?php endforeach ?>

        @endrole
        @role('Super_Admin')
        <?php
        setlocale(LC_MONETARY,"de_DE");
        foreach ($datos2 as $id => $dato):?>
      
         <tr
          
          
          
          >

        <th scope="row"><p>{{$dato['order_number']}}</th>
        <td>    <p>{{$dato['order_nombre']}}</p></td>
        <td>    <p> {{substr($dato['order_fecha'], 0, 10) }}</p></td>
        <td>   <p>$ 
          {{ number_format( $dato['order_total'], 2, ',', '.') }}</p>
        </td>
    


        <td>
    
          @if($dato['order_estado'] != "Borrador")
          <a href="{{route('resumen_orden',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
       
          @else
          <a href="{{route('order.store_borrador',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
          @endif
         
          @if($dato['order_estado'] != "Borrador")
          <a href="{{route('autorizar_orden',['order_number'=> $dato['order_number']   ])}}"   class="btn btn-sm btn-circle btn-outline-secondary" title="Aprobar"><i class="fa fa-edit"></i></a>
           @endif
          @if($dato['order_estado'] == 'Aprobada')
          <a href="{{route('generatePDF-b',['order_number'=> $dato['order_number']   ])}}" class="btn btn-sm btn-circle btn-outline-info" title="Descargar Aprobación"> @include('iconos.pdficon')</a>
     
          @endif



          @if($dato['order_estado'] == "Borrador")

          <a href="{{route('order.store_borrador',['order_number'=> $dato['order_number']   ])}}"  class="btn btn-sm btn-circle btn-outline-secondary gestionar" title="gestionar">
            <i class="fa fa-edit fa-rotate-180"></i></a>
      
@else
          <a href="{{route('gestionar_orden',['order_number'=> $dato['order_number']   ])}}"  class="btn btn-sm btn-circle btn-outline-secondary gestionar" title="gestionar">
            <i class="fa fa-edit fa-rotate-180"></i></a>
            @endif
        
          @role('Admin')
          
          <a href="{{route('delete_orden',['order_number'=> $dato['order_number']   ])}}"class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
          @endrole
     
         
        
       
        </td>
  
        <td   >      <a href="#" 
          
          class="fa-pulse 
          
          @if(!in_array($dato['order_number'] ,$array_notifications))
          btn btn-sm btn-circle btn-outline-no-danger
       
      @else
      btn btn-sm btn-circle btn-outline-danger fa-pulse fa-spin
      @endif "
          
          
          
          title="Alerts" >  @include('iconos.notificacion_red')</a>
        
      
        
        
        </td>
        <td 
         class="
         @if($dato['order_estado'] == "En Proceso")
        yellow_status
         @endif
          @if($dato['order_estado'] == "Elaboración")
         green_status
          @endif   
          @if($dato['order_estado'] == "Cerrado")
          grey_status
           @endif  
           @if($dato['order_estado'] == "Aprobada")
           blue_status
            @endif  
            @if($dato['order_estado'] == "Borrador")
            orange_status
             @endif 
           "
           
          > 
          
          

          <p  >
            
            
            {{$dato['order_estado']}}</p>
        </td>

      </tr>
  

      <?php endforeach ?>

      @endrole


                </tbody>
              </table> 

              <nav class="mt-4">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
