<!-- Modal Container -->
<div id="modal" class="fixed inset-0 bg-dark bg-opacity-50 items-center justify-center hidden z-10">
    <div class="bg-dark p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-white text-lg font-semibold mb-4">New Task</h2>

        <!-- Assignee Role -->
        <div class="mb-4">
            <label class="text-gray-400 block mb-1">Assignee Role</label>
            <select class="w-full p-2 rounded bg-dark text-white">
                <option>Choose role to assign</option>
                <option>Manager</option>
                <option>Developer</option>
                <option>All</option>
            </select>
        </div>

        <!-- Assignee -->
        <div class="mb-4">
            <label class="text-gray-400 block mb-1">Assignee</label>
            <select class="w-full p-2 rounded bg-dark text-white">
                <option>Choose people to assign</option>
                <option>John Doe</option>
                <option>Jane Smith</option>
                <option>All</option>
            </select>
        </div>

        <!-- Task Name -->
        <div class="mb-4">
            <label class="text-gray-400 block mb-1">Task Name</label>
            <input type="text" placeholder="Type your title task here..."
                class="w-full p-2 rounded bg-transparent text-white">
        </div>

        <!-- Task Description -->
        <div class="mb-6">
            <label class="text-gray-400 block mb-1">Task Description</label>
            <textarea rows="3" placeholder="Type your task description here..."
                class="w-full p-2 rounded bg-transparent text-white"></textarea>
        </div>

        <!-- Buttons -->
        <div class="flex justify-evenly">
            <button id="cancelBtn"
                class="px-14 py-2 rounded-full bg-lightOrange shadow-shadowCustom text-white hover:bg-[#E7957E]">Cancel</button>
            <button class="px-14 py-2 rounded-full bg-orangeCustom shadow-shadowCustom text-white hover:bg-orange-600">Create</button>
        </div>
    </div>
