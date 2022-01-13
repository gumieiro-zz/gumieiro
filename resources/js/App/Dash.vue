<template>
  <div>
    <div class="py-6 sm:px-20 bg-white border-b border-gray-200">
      <!-- Status Card's -->
      <div class="grid grid-rows-1 grid-col-4 grid-flow-col gap-4 m-2 py-3">
        <div class="border-b rounded border-gray-300 p-3">
          <div class="grid grid-rows-3 grid-flow-row">
            <div class="text-xs">Saldo</div>
            <div class="text-base">R$ 2000,00</div>
            <div class="text-xs">
              <b class="decoration-lime-300">+3%</b>
              <a href="#" class="underline">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="border-b rounded border-gray-300 p-3">
          <div class="grid grid-rows-3 grid-flow-row">
            <div class="text-xs">Saldo</div>
            <div class="text-base">R$ 2000,00</div>
            <div class="text-xs">
              <b class="decoration-lime-300">+3%</b>
              <a href="#" class="underline">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="border-b rounded border-gray-300 p-3">
          <div class="grid grid-rows-3 grid-flow-row">
            <div class="text-xs">Saldo</div>
            <div class="text-base">R$ 2000,00</div>
            <div class="text-xs">
              <b class="decoration-lime-300">+3%</b>
              <a href="#" class="underline">Ver mais</a>
            </div>
          </div>
        </div>
        <div class="border-b rounded border-gray-300 p-3">
          <div class="grid grid-rows-3 grid-flow-row">
            <div class="text-xs">Saldo</div>
            <div class="text-base">R$ 2000,00</div>
            <div class="text-xs">
              <b class="decoration-lime-300">+3%</b>
              <a href="#" class="underline">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Table -->
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 p-1">
          <div
            class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
          >
            <div
              class="
                shadow
                overflow-hidden
                border-b border-gray-200
                sm:rounded-lg
              "
            >
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Name
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Title
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Status
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Role
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <img
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                            alt=""
                          />
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            Jane Cooper
                          </div>
                          <div class="text-sm text-gray-500">
                            jane.cooper@example.com
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        Regional Paradigm Technician
                      </div>
                      <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="
                          px-2
                          inline-flex
                          text-xs
                          leading-5
                          font-semibold
                          rounded-full
                          bg-green-100
                          text-green-800
                        "
                      >
                        Active
                      </span>
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      Admin
                    </td>
                    <td
                      class="
                        px-6
                        py-4
                        whitespace-nowrap
                        text-right text-sm
                        font-medium
                      "
                    >
                      <a href="#" class="text-indigo-600 hover:text-indigo-900"
                        >Edit</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <img
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                            alt=""
                          />
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            Jane Cooper
                          </div>
                          <div class="text-sm text-gray-500">
                            jane.cooper@example.com
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        Regional Paradigm Technician
                      </div>
                      <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="
                          px-2
                          inline-flex
                          text-xs
                          leading-5
                          font-semibold
                          rounded-full
                          bg-green-100
                          text-green-800
                        "
                      >
                        Active
                      </span>
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      Admin
                    </td>
                    <td
                      class="
                        px-6
                        py-4
                        whitespace-nowrap
                        text-right text-sm
                        font-medium
                      "
                    >
                      <a href="#" class="text-indigo-600 hover:text-indigo-900"
                        >Edit</a
                      >
                    </td>
                  </tr>
                  <!-- More people... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
      <!-- Plano de Investimentos -->
      <div class="p-6">
        <div class="flex items-center">
          <svg
            id="Layer_1"
            class="w-8 h-8 text-gray-400"
            version="1.1"
            viewBox="0 0 50 50"
            xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
          >
            <g>
              <path
                class="st5"
                d="M1.13,21.03c2.43-0.98,5.08-1.54,7.87-1.54c11.6,0,21,9.4,21,21c0,2.62-0.5,5.13-1.38,7.44H1.13V21.03z"
              />
              <g>
                <rect
                  class="st3"
                  height="35.73"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 78.4302 60.2692)"
                  width="7.21"
                  x="35.61"
                  y="12.27"
                />
                <rect
                  class="st3"
                  height="21.8"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 50.2501 74.1987)"
                  width="7.21"
                  x="21.52"
                  y="26.2"
                />
                <rect
                  class="st3"
                  height="14.1"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 22.0699 81.9009)"
                  width="7.21"
                  x="7.43"
                  y="33.9"
                />
                <rect
                  class="st3"
                  height="35.73"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 78.4302 60.2692)"
                  width="7.21"
                  x="35.61"
                  y="12.27"
                />
                <rect
                  class="st1"
                  height="21.8"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 50.2501 74.1987)"
                  width="7.21"
                  x="21.52"
                  y="26.2"
                />
                <rect
                  class="st7"
                  height="14.1"
                  transform="matrix(-1 -4.490376e-11 4.490376e-11 -1 22.0699 81.9009)"
                  width="7.21"
                  x="7.43"
                  y="33.9"
                />
                <g>
                  <path
                    class="st4"
                    d="M48.13,47.25h-4.55V12.27c0-0.41-0.34-0.75-0.75-0.75h-7.21c-0.41,0-0.75,0.34-0.75,0.75v34.98h-5.38V26.2     c0-0.41-0.34-0.75-0.75-0.75h-7.21c-0.41,0-0.75,0.34-0.75,0.75v21.05h-5.38V33.9c0-0.41-0.34-0.75-0.75-0.75H7.43     c-0.41,0-0.75,0.34-0.75,0.75v13.35h-3.8V2c0-0.41-0.34-0.75-0.75-0.75S1.38,1.59,1.38,2v46c0,0.41,0.34,0.75,0.75,0.75h46     c0.41,0,0.75-0.34,0.75-0.75S48.54,47.25,48.13,47.25z M8.18,47.25v-12.6h5.71v12.6H8.18z M22.27,47.25v-20.3h5.71v20.3H22.27z      M36.36,47.25V13.02h5.71v34.23H36.36z"
                  />
                  <path
                    class="st4"
                    d="M9.7,30.88c0.19,0,0.38-0.07,0.53-0.22l19.58-19.58v3.29c0,0.41,0.34,0.75,0.75,0.75s0.75-0.34,0.75-0.75     v-5.1c0-0.41-0.34-0.75-0.75-0.75h-5.1c-0.41,0-0.75,0.34-0.75,0.75s0.34,0.75,0.75,0.75h3.29L9.17,29.6     c-0.29,0.29-0.29,0.77,0,1.06C9.32,30.81,9.51,30.88,9.7,30.88z"
                  />
                </g>
              </g>
            </g>
          </svg>
          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <a href="https://laravel.com/docs">Plano de Investimentos</a>
          </div>
        </div>

        <div class="ml-12">
          <div class="mt-2 text-sm text-gray-500">
            <ul>
              <li>Falta investir 1000,00 este mês</li>
              <li>Você recebeu R$ 350,69 de dividendos este mês</li>
              <li>Sua carteira valorizou 800% desde ontem</li>
            </ul>
          </div>

          <a href="https://laravel.com/docs">
            <div
              class="
                mt-3
                flex
                items-center
                text-sm
                font-semibold
                text-indigo-700
              "
            >
              <div>Explore the documentation</div>

              <div class="ml-1 text-indigo-500">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                  <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Previsões de Gastos -->
      <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 64 64"
            class="w-8 h-8 text-gray-400"
          >
            <g id="outline">
              <path
                d="M53,4H40V3a1,1,0,0,0-1-1H25a1,1,0,0,0-1,1V4H11a1,1,0,0,0-1,1V61a1,1,0,0,0,1,1H53a1,1,0,0,0,1-1V5A1,1,0,0,0,53,4ZM26,4H38V7a1,1,0,0,1-1,1H27a1,1,0,0,1-1-1Zm1,6H48V56H16V10ZM52,60H12V6H24V7a2.966,2.966,0,0,0,.184,1H15a1,1,0,0,0-1,1V57a1,1,0,0,0,1,1H49a1,1,0,0,0,1-1V9a1,1,0,0,0-1-1H39.816A2.966,2.966,0,0,0,40,7V6H52Z"
              />
              <path
                d="M24,26a6,6,0,0,0,4.648-9.788l1.165-1.631a1,1,0,0,0-1.626-1.162l-1.054,1.474A6,6,0,1,0,24,26Zm0-10a3.95,3.95,0,0,1,1.961.535l-2.089,2.923-1.165-1.165a1,1,0,0,0-1.414,1.414l2,2A1,1,0,0,0,24,22c.027,0,.055,0,.082,0a1,1,0,0,0,.731-.416l2.6-3.639A3.954,3.954,0,0,1,28,20a4,4,0,1,1-4-4Z"
              />
              <path
                d="M24,40a6,6,0,0,0,4.648-9.788l1.165-1.631a1,1,0,0,0-1.626-1.162l-1.054,1.474A6,6,0,1,0,24,40Zm0-10a3.95,3.95,0,0,1,1.961.535l-2.089,2.923-1.165-1.165a1,1,0,0,0-1.414,1.414l2,2A1,1,0,0,0,24,36c.027,0,.055,0,.082,0a1,1,0,0,0,.731-.416l2.6-3.639A3.954,3.954,0,0,1,28,34a4,4,0,1,1-4-4Z"
              />
              <path
                d="M24,54a6,6,0,0,0,4.648-9.788l1.165-1.631a1,1,0,0,0-1.626-1.162l-1.054,1.474A6,6,0,1,0,24,54Zm0-10a3.95,3.95,0,0,1,1.961.535l-2.089,2.923-1.165-1.165a1,1,0,0,0-1.414,1.414l2,2A1,1,0,0,0,24,50c.027,0,.055,0,.082,0a1,1,0,0,0,.731-.416l2.6-3.639A3.954,3.954,0,0,1,28,48a4,4,0,1,1-4-4Z"
              />
              <path d="M34,20h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
              <path d="M34,24h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
              <path d="M34,34h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
              <path d="M34,38h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
              <path d="M34,48h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
              <path d="M34,52h9a1,1,0,0,0,0-2H34a1,1,0,0,0,0,2Z" />
            </g>
          </svg>
          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
            <a href="#">Previsões de Gastos</a>
          </div>
        </div>

        <div class="ml-12">
          <div class="mt-2 text-sm text-gray-500">
            <ul>
              <li class="flex">Bala R$ 2,50 daqui a 2 dias</li>
              <li class="flex">Batata R$ 223,50 daqui a 8 semanas</li>
              <li class="flex">Batata R$ 223,50 amanhã</li>
            </ul>
          </div>

          <a href="#">
            <div
              class="
                mt-3
                flex
                items-center
                text-sm
                font-semibold
                text-indigo-700
              "
            >
              <div>Ver Mais</div>

              <div class="ml-1 text-indigo-500">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                  <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Padrão de Gastos -->
      <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            class="w-8 h-8 text-gray-400"
          >
            <path
              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
            ></path>
          </svg>
          <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
            Cadê meu dinheiro?
          </div>
        </div>

        <div class="ml-12">
          <div class="mt-2 text-sm text-gray-500">
            <ul>
              <li class="flex">Aluguel R$ 2,50 </li>
              <li class="flex">Mercado R$ 223,50</li>
              <li class="flex">Farmácia R$ 223,50</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
});
</script>
