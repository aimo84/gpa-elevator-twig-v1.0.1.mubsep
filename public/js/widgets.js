
// widgets.js

const LOAD   = 'my-app/widgets/LOAD';
const CREATE = 'my-app/widgets/CREATE';
const UPDATE = 'my-app/widgets/UPDATE';
const REMOVE = 'my-app/widgets/REMOVE';



export function loadWidgets() {
  return { type: LOAD };
}

export function createWidget(widget) {
  return { type: CREATE, widget };
}

export function updateWidget(widget) {
  return { type: UPDATE, widget };
}

export function removeWidget(widget) {
  return { type: REMOVE, widget };
}

export default createReducerFromMapping({
    [LOAD]: (state, action) => { },
    [CREATE]: (state, action) => { },
    [UPDATE]: (state, action) => { },
    [REMOVE]: (state, action) => { },
});




// elsewhere
function createReducerFromMapping(map) {
    return (state, action) => {
        var reducer = map[action.type];
        if (typeof reducer === "function") return reducer(state, action);
        return state;
    };
}