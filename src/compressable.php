namespace nsCompress;

interface ICompressedData {
}

interface IBinaryTree {
	public Add();
	public Find();
}

interface ICompresable {
	public ICompressedData Compress(String $str) ;
	public String Decompress(ICompressedData $data);
}