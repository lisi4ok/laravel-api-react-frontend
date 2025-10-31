import { createSlice, type PayloadAction } from '@reduxjs/toolkit';

const contactSlice = createSlice({
    name: 'contacts',
    initialState: [] as Array<{ id: number; name: string; email: string }>,
    reducers: {
        addContact: (state, action: PayloadAction<{ id: number; name: string; email: string }>) => {
            state.push(action.payload);
        },
        removeContact: (state, action: PayloadAction<number>) => {
            return state.filter(contact => contact.id !== action.payload);
        },
    },
})

export default contactSlice.reducer;