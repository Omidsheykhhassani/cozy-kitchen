wp.blocks.registerBlockType("cozykitchen/hero", {
  title: "Hero",
  edit: EditComponent,
  save: SaveComponent,
})

function EditComponent() {

}

function SaveComponent() {
  return <p>This is from my block.</p>
}