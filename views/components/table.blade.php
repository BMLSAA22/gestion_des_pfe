@props(['users','type'])
<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ====== Table Section Start -->
<section class="bg-white py-20 lg:py-[120px]">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="max-w-full overflow-x-auto">
               @if($type=='3')
               <h1 class="font font-size 12px">admins</h1 class="font font-size 12px">
               @endif
               @if($type=='2')
               <h1 class="font font-size 12px">entrepries</h1>
               @endif
               @if($type=='1')
               <h1 class="font font-size 12px">enseignats</h1>
               @endif
               @if($type=='0')
               <h1 class="font font-size 12px">etudiants</h1>
               @endif
               <table class="table-auto w-full">
                  <thead>
                     <tr class="bg-primary text-center">
                        <th
                           class="
                           w-1/6
                           min-w-[140px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           "
                           >
                           NOM
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[140px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           PRENOM
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[140px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           ANNEE
                        </th>
                        <th
                           class="
                           w-1/6
                           max-w-[200px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           EMAIL
                        </th>
                    <!--    <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           SPECIALITE
                        </th> -->
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-r border-transparent
                           "
                           >
                           MODIFIER
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)
                     @if((int) $type==$user->type)
                     <x-table-element :user="$user"/>
                     @endif
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Table Section End -->