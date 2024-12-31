

<!-- Modal toggle -->
<button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-No focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Choose Report Display Options
  </button>
  
  <!-- Main modal -->
  <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg p-6">
          <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Campaign Settings</h1>
            <button class="text-blue-500 hover:underline" data-modal-hide="static-modal">Close Panel</button>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Select Campaigns -->
            <div>
              <label for="campaigns" class="block text-sm font-medium text-gray-700 mb-2">Select Campaigns:</label>
              <select id="campaigns" name="campaigns" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>ALL-ACTIVE</option>
                <option>AIR_COB - AIRE_COBRO</option>
                <option>CALLBACK - CALLBACK</option>
                <option>MANUAL - Marcación Manual</option>
                <option>PRU_VBV2 - Prueba VoiceBot V2</option>
                <option>PRUEBAS - CAMPAÑA DE PRUEBAS</option>
                <option>SOULPHON - SOULPHON</option>
                <option>TESOUL1 - Test SoulPhone1</option>
              </select>
              <p class="text-sm text-gray-500 mt-2">Hold down Ctrl to select multiple campaigns.</p>
            </div>
      
            <!-- Select User Groups -->
            <div>
              <label for="user-groups" class="block text-sm font-medium text-gray-700 mb-2">Select User Groups:</label>
              <select id="user-groups" name="user-groups" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>ALL-GROUPS</option>
                <option>ADMIN - VICIDIAL ADMINISTRATORS</option>
                <option>CLAROCARTERA - CLARO CARTERA</option>
                <option>Pruebas - Pruebas</option>
                <option>TESTSOUL - TESTSOUL</option>
                <option>ThomasGreg - Thomas Greg</option>
                <option>VOICEBOT - VOICEBOT VER 1 2</option>
              </select>
            </div>
      
            <!-- Select In-Groups -->
            <div>
              <label for="in-groups" class="block text-sm font-medium text-gray-700 mb-2">Select In-Groups:</label>
              <select id="in-groups" name="in-groups" multiple class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>ALL-INGROUPS</option>
                <option>AGENTDIRECT - Single Agent Direct Queue</option>
                <option>AGENTDIRECT_CHAT - Agent Direct Queue for Chats</option>
                <option>DEMOTG - DEMO THOMAS GREG</option>
                <option>MTD_OP1 - Montechelo Dummy Option 1</option>
                <option>MTD_OP2 - Montechelo Dummy Option 2</option>
                <option>PRUEBA - PRUEBA AUDIO FORK</option>
              </select>
            </div>
          </div>
      
          <!-- Additional Options -->
          <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
              <label for="refresh-rate" class="block text-sm font-medium text-gray-700 mb-2">Screen Refresh Rate:</label>
              <select id="refresh-rate" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>4 seconds</option>
                <option>10 seconds</option>
                <option>20 seconds</option>
                <option>30 seconds</option>
                <option>40 seconds</option>
                <option>60 seconds</option>
                <option>2 minutes</option>
                <option>5 minutes</option>
                <option>10 minutes</option>
                <option>20 minutes</option>
                <option>30 minutes</option>
                <option>40 minutes</option>
                <option>60 minutes</option>
                <option>2 hours</option>
                <option>2 years</option>
              </select>
            </div>
            <div>
              <label for="inbound" class="block text-sm font-medium text-gray-700 mb-2">Inbound:</label>
              <select id="inbound" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>Yes</option>
              </select>
            </div>
            <div>
              <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Monitor:</label>
              <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option>No</option>
              </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Show Drop In-Group Row:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Inbound SLA Stats:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>NO</option>
                  <option>YES</option>
                  <option>TMA</option>
                  <option>SLA 1 ONLY</option>
                  <option>SLA 2 ONLY</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Show Cust. Phone Code:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Show Carrier Stats:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Agent Time Stats:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Agent Latency:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                  <option>YES</option>
                  <option>ALL</option>
                  <option>DAY</option>
                  <option>NOW</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Parked Call Stats:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                  <option>YES</option>
                  <option>LIMITED</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">In-group color override:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
            <div>
                <label for="monitor" class="block text-sm font-medium text-gray-700 mb-2">Display as:</label>
                <select id="monitor" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                  <option>No</option>
                </select>
            </div>
        </div>
      
          <!-- Submit Button -->
          <div class="mt-6 flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg" data-modal-hide="static-modal">
              Submit
            </button>
          </div>
      </div>
    </div>
</div>
  